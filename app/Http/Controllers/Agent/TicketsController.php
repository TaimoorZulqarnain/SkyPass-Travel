<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airline;
use App\Models\Ticket;
use App\Models\TicketSector;
use App\Models\AgentTicket;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $start = $request->input('start', 0);
        $size = $request->input('size', 10);
        $filters = $request->input('filters', []);
        $globalFilter = $request->input('globalFilter', '');
        $sorting = $request->input('sorting', []);
        $airlines_list = Airline::with(['tickets' => function ($query) use ($filters, $sorting, $start, $size) {
            // Apply filters
            if (is_array($filters)) {
                foreach ($filters as $filter) {
                    $query->where($filter['id'], 'like', '%' . $filter['value'] . '%');
                }
            }        
            // Apply sorting
            if (is_array($sorting)) {
                foreach ($sorting as $sort) {
                    $query->orderBy($sort['id'], $sort['desc'] ? 'desc' : 'asc');
                }
            }        
            // Limit and offset
            $query->skip($start)->take($size);        
            // Eager load ticket sectors for each ticket
            $query->with('sectors');
        }])->get();
        // echo "<pre>";
        // print_r($airlines_list);
        // echo "</pre>";
        return view('agent.tickets.index', compact('airlines_list'));
    }
    
    public function ticket_2(Request $request)
    {
        $start = $request->input('start', 0);
        $size = $request->input('size', 10);
        $filters = $request->input('filters', []);
        $globalFilter = $request->input('globalFilter', '');
        $sorting = $request->input('sorting', []);
        $query = Ticket::query();

        if(is_array($filters)){
            foreach ($filters as $filter) {
                $query->where($filter['id'], 'like', '%'.$filter['value'].'%');
            }
        }

        // if ($globalFilter) {
        //     $query->whereHas('tickets', function ($query) use ($globalFilter) {
        //         $query->where('full_name', 'like', '%' . $globalFilter . '%');
        //     });
        // }
    
        if(is_array($sorting)){
            foreach ($sorting as $sort) {
                $query->orderBy($sort['id'], $sort['desc'] ? 'desc' : 'asc');
            }
        }
        $totalCountQuery = clone $query;
        $totalRowCount = $totalCountQuery->count();
        $query->join('ticket_sectors', 'ticket_sectors.ticket_id', '=', 'tickets.id')->select('tickets.*', 'ticket_sectors.*');
        $tickets = $query->skip($start)->take($size)->get();

        return view('agent.tickets.index_old', compact('tickets'));
    }
    public function booking_details(Request $request)
    {
        $ticket_id = $request->input('ticket_id');
        $ticket = Ticket::with('sectors')
                ->join('airlines', 'tickets.airline_id', '=', 'airlines.id')
                ->select('tickets.*', 'airlines.name', 'airlines.image')
                ->find($ticket_id);
        return view('agent.tickets.booking-details', compact('ticket'));
    }
    public function submit_ticket_booking(Request $request){
        // print_r($request->input());
        $ticket_id = $request->input('ticket_id');
        $adult = $request->input('adult');
        $child = $request->input('child');
        $infants = $request->input('infants');
        $agent_id = auth()->user()->id;
        $booking_id = AgentTicket::max('booking_id');
        $booking_id = ($booking_id) ? $booking_id++ : 1 ;
        $data = [];
        DB::beginTransaction();
        try {
            if(!empty($adult)){
                for ($i=0; $i < count($adult['title']); $i++) { 
                    $data[] = array(
                        'agent_id'=> $agent_id,
                        'ticket_id'=>$ticket_id,
                        'booking_id'=>$booking_id,
                        'passengers_type' => 'Adult',
                        'title' => $adult['title'][$i],
                        'sur_name' => $adult['sur_name'][$i],
                        'given_name' => $adult['given_name'][$i],
                        'passport_number' => $adult['passport_number'][$i],
                        'passport_expiry' => $adult['passport_expiry'][$i],
                        'dob' => $adult['dob'][$i],
                        'nationality' => $adult['nationality'][$i],
                        'mobile_number' => ($adult['mobile_number'][$i])?$adult['mobile_number'][$i]:NULL,
                        'email' => ($adult['email'][$i])?$adult['email'][$i]:NULL,
                        'whatsapp_number' => ($adult['whatsapp_number'][$i])?$adult['whatsapp_number'][$i]:NULL,
                        'created_at' => now(),
                        'updated_at' => now(),
                    );
                }
            }
            if(!empty($child)){
                for ($i=0; $i < count($child['title']); $i++) { 
                    $data[] = array(
                        'agent_id'=> $agent_id,
                        'ticket_id'=>$ticket_id,
                        'booking_id'=>$booking_id,
                        'passengers_type' => 'Child',
                        'title' => $child['title'][$i],
                        'sur_name' => $child['sur_name'][$i],
                        'given_name' => $child['given_name'][$i],
                        'passport_number' => $child['passport_number'][$i],
                        'passport_expiry' => $child['passport_expiry'][$i],
                        'dob' => $child['dob'][$i],
                        'nationality' => $child['nationality'][$i],
                        'mobile_number' => ($child['mobile_number'][$i])?$child['mobile_number'][$i]:NULL,
                        'email' => ($child['email'][$i])?$child['email'][$i]:NULL,
                        'whatsapp_number' => ($child['whatsapp_number'][$i])?$child['whatsapp_number'][$i]:NULL,
                        'created_at' => now(),
                        'updated_at' => now(),
                    );
                }
            }
            if(!empty($infants)){
                for ($i=0; $i < count($infants['title']); $i++) { 
                    $data[] = array(
                        'agent_id'=> $agent_id,
                        'ticket_id'=>$ticket_id,
                        'booking_id'=>$booking_id,
                        'passengers_type' => 'Infants',
                        'title' => $infants['title'][$i],
                        'sur_name' => $infants['sur_name'][$i],
                        'given_name' => $infants['given_name'][$i],
                        'passport_number' => $infants['passport_number'][$i],
                        'passport_expiry' => $infants['passport_expiry'][$i],
                        'dob' => $infants['dob'][$i],
                        'nationality' => $infants['nationality'][$i],
                        'mobile_number' => ($infants['mobile_number'][$i])?$infants['mobile_number'][$i]:NULL,
                        'email' => ($infants['email'][$i])?$infants['email'][$i]:NULL,
                        'whatsapp_number' => ($infants['whatsapp_number'][$i])?$infants['whatsapp_number'][$i]:NULL,
                        'created_at' => now(),
                        'updated_at' => now(),
                    );
                }
            }
            if(!empty($data)){
                AgentTicket::insert($data);
                DB::commit();
               return redirect('agents/on-hold-tickets')->with('message', "Your booking confirmed successfuly.");
            }
            else{
                return redirect('agents/book-tickets')->with('error', "Your data not inserted");    
            }
        }
        catch (\Exception $e) {
            DB::rollback();
            $data = $e->getMessage();
            print_r($data);
           return redirect('agents/book-tickets')->with('error', $data);
        }
    }
    // public function all_on_hold_bookings(Request $request){
    //     $start = $request->input('start', 0);
    //     $size = $request->input('size', 10);
    //     $filters = $request->input('filters', []);
    //     $globalFilter = $request->input('globalFilter', '');
    //     $sorting = $request->input('sorting', []);
    //     $query = AgentTicket::query();

    //     if(is_array($filters)){
    //         foreach ($filters as $filter) {
    //             $query->where($filter['id'], 'like', '%'.$filter['value'].'%');
    //         }
    //     }    
    //     if(is_array($sorting)){
    //         foreach ($sorting as $sort) {
    //             $query->orderBy($sort['id'], $sort['desc'] ? 'desc' : 'asc');
    //         }
    //     }
    //     $totalCountQuery = clone $query;
    //     $totalRowCount = $totalCountQuery->count();
    //     $query->join('tickets','tickets.id', '=', 'agent_tickets.ticket_id')
    //     ->join('ticket_sectors', 'ticket_sectors.ticket_id','=','tickets.id')
    //     ->select('agent_tickets.*', 'tickets.*', 'ticket_sectors.*');
    //     $tickets = $query->skip($start)->take($size)->get();

    //     return view('agent.tickets.on_hold', compact('tickets'));
    // }
    public function all_on_hold_bookings(Request $request){
        $start = $request->input('start', 0);
        $size = $request->input('size', 10);
        $filters = $request->input('filters', []);
        $globalFilter = $request->input('globalFilter', '');
        $sorting = $request->input('sorting', []);
        $query = AgentTicket::query();
    
        if (is_array($filters)) {
            foreach ($filters as $filter) {
                $query->where($filter['id'], 'like', '%' . $filter['value'] . '%');
            }
        }    
        if (is_array($sorting)) {
            foreach ($sorting as $sort) {
                $query->orderBy($sort['id'], $sort['desc'] ? 'desc' : 'asc');
            }
        }
        $query->join('tickets','tickets.id', '=', 'agent_tickets.ticket_id')
       ->join('ticket_sectors', 'ticket_sectors.ticket_id','=','tickets.id')
       ->join('users', 'users.id','=','agent_tickets.agent_id')
       ->join('airlines', 'airlines.id','=','tickets.airline_id');
    
        $query->selectRaw('tbl_agent_tickets.*,tbl_users.name as agent_name,tbl_agent_tickets.created_at as agent_ticket_create_at,tbl_agent_tickets.updated_at as agent_ticket_updated_at, tbl_tickets.*, tbl_ticket_sectors.*,tbl_airlines.name as airline_name,
            SUM(CASE WHEN passengers_type = "Adult" THEN 1 ELSE 0 END) AS total_adults,
            SUM(CASE WHEN passengers_type = "Child" THEN 1 ELSE 0 END) AS total_children,
            SUM(CASE WHEN passengers_type = "Infants" THEN 1 ELSE 0 END) AS total_infants,
            SUM(CASE WHEN passengers_type = "Adult" THEN adult_price ELSE 0 END) AS total_adult_price,
            SUM(CASE WHEN passengers_type = "Child" THEN child_price ELSE 0 END) AS total_child_price,
            SUM(CASE WHEN passengers_type = "Infants" THEN infants_price ELSE 0 END) AS total_infants_price
        ');
    
        $query->groupBy('agent_tickets.booking_id');
    
        $totalCountQuery = clone $query;
        $totalRowCount = $totalCountQuery->count();
        $tickets = $query->skip($start)->take($size)->get();
    
        return view('agent.tickets.on_hold', compact('tickets'));
    }
    public function view_booking($id) {
        $agent_tickets = AgentTicket::where('booking_id', $id)->get();
        $ticketIds = $agent_tickets->pluck('ticket_id')->unique()->toArray();
        $tickets = Ticket::whereIn('id', $ticketIds)->get()->keyBy('id')->toArray();
        $ticketSectors = TicketSector::whereIn('ticket_id', $ticketIds)->get()->groupBy('ticket_id')->toArray();
        $combinedData = array(
            'agent_tickets' => $agent_tickets,
            'tickets' => $tickets,
            'ticket_sectors' => $ticketSectors,
        );
        // echo "<pre>";
        // print_r($combinedData);
        // echo "</pre>";
        return view('agent.tickets.booking', compact('combinedData'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

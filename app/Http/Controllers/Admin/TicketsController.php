<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Airline;
use App\Models\TicketSector;
use DataTables;



class TicketsController extends Controller
{
    public function getAirlineName($airlineId)
{
    $airline = Airline::find($airlineId);
    return $airline ? $airline->name : 'N/A'; // Return the airline name or 'N/A' if not found
}

    public function create(){
        return view('admin.Tickets.create');
    }
    public function index(){
        // $data['Airlines'] = Airline::all();
        return view('admin.Tickets.index');
    }

    public function ticket_list(Request $request)
    {
            $query = Ticket::select('tickets.*', 'tickets.id as ticket_id')
                ->leftJoin('airlines', 'tickets.airline_id', '=', 'airlines.id');
               if($request->ajax()) {
            // Filter by service type if provided

            if ($request->input('filter_option') != "") {
                $serviceType = $request->input('filter_option');
                $query->where('tickets.service_type', $serviceType);
            }

            if (!empty($request->input('airline_id'))) {
                $airlineId = $request->input('airline_id');
                $query->where('tickets.airline_id', $airlineId);
            }
            if (!empty($request->input('searchInput'))) {
                $searchInput = $request->input('searchInput');
                $query->where(function ($q) use ($searchInput) {
                    $q->where('name', 'like', '%' . $searchInput . '%') // Replace 'column1' with the actual column name
                      ->orWhere('service_type', 'like', '%' . $searchInput . '%')
                      ->orWhere('seats', 'like', '%' . $searchInput . '%') // Replace 'column2' with other column names as needed
                      ->orWhere('is_featured', 'like', '%' . $searchInput . '%');// Replace 'column2' with other column names as needed
                });
            }
            
            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn('DT_RowIndex', function ($row) {
                    return '';
                })
                ->addColumn('is_featured', function ($row) {
                    return $row->is_featured === 'Yes' ? 'Yes' : 'No';
                })
                ->addColumn('meal', function ($row) {
                    return $row->meal === 'Yes' ? 'Yes' : 'No';
                })
                ->addColumn('note', function ($row) {
                    return $row->note ? $row->note : 'N/A';
                })                
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <div class="row x-gap-10 y-gap-10 items-center">
                    <a href="' . route('ticket.edit', $row->ticket_id) . '" class="flex-center bg-light-2 rounded-4 size-35">
                    <i class="icon-edit text-16 text-light-1"></i>
                    </a>
                    <button class="flex-center bg-light-2 rounded-4 size-35 deleteTicket" data-id="'.$row->ticket_id.'">
                    <i class="icon-trash-2 text-16 text-light-1"></i>
                    </button>
                    <button class="flex-center bg-light-2 rounded-4 size-35 viewTicket" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row->ticket_id.'">
                    <i class="icon-eye text-16 text-light-1"></i>
                    </button>
                    </div>
                    ';
                    return $actionBtn;
                })
                ->editColumn('airline_id', function ($row) {
                    return $this->getAirlineName($row->airline_id);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
    }
    

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'airline_id' => 'required|string|max:255',
            'adult_price' => 'required|numeric|min:0',
            'child_price' => 'required|numeric|min:0',
            'infants_price' => 'required|numeric|min:0',
            'service_type' => 'required',
            'seats' => 'required|numeric',
            'is_featured' => 'required|in:Yes,No',
            'super_admin_approval' => 'required|in:Yes,No',
        ], [
            'airline_id.required' => 'Select Airline',
            'adult_price.required' => 'Adult Price Should be Added',
            'child_price.required' => 'Child Price Should be Added',
            'infants_price.required' => 'Infants Price Should be Added',
            'service_type.required' => 'One-Way or Two-Way Service Add',
            'seats.required' => 'Seats Should be Added',
            'is_featured.required' => 'Required',
            'super_admin_approval.required' => 'Required',
        ]);

        DB::beginTransaction();
        try {

            $serviceType = $request->input('service_type');
                  //******************Tickets table insertion*****************
                $ticket = Ticket::create([
                    'airline_id' => $request->input('airline_id'),
                    'adult_price' => $request->input('adult_price'),
                    'child_price' => $request->input('child_price'),
                    'infants_price' => $request->input('infants_price'),
                    'adult_discount' => $request->input('adult_discount'),
                    'child_discount' => $request->input('child_discount'),
                    'infants_discount' => $request->input('infants_discount'),
                    'service_type' => $request->input('service_type'),
                    'seats' => $request->input('seats'),
                    'is_featured' => $request->input('is_featured'),
                    'meal' => $request->input('meal'),
                    'super_admin_approval' => $request->input('super_admin_approval'),
                    'fare_seats' => $request->input('fare_seats'),
                    'seats_policy' => $request->input('seats_policy'),
                    'note' => $request->input('note'),
                ]);
                  
                 $ticket_id  = $ticket->id;   //last inseted id

               //******************Ticket_Sectors table insertion*****************
                $flight_num = $request->input('flight_num');
                $departure = $request->input('departure');
                $destination = $request->input('destination');
                $baggage = $request->input('baggage');
                $departure_date = $request->input('departure_date');
                $arrival_date = $request->input('arrival_date');
                $departure_time = $request->input('departure_time');
                $arrival_time = $request->input('arrival_time');
               

            $counter = count($flight_num);
            $data1 = array();
            for ($i = 0; $i < $counter; $i++) {
                $data1[] =
                    array(
                        'ticket_id' =>  $ticket_id,
                        'flight_num' =>  $flight_num[$i]['flight_num'],
                        'departure' => $departure[$i]['departure'],
                        'destination' => $destination[$i]['destination'],
                        'baggage' =>   $baggage[$i]['baggage'],
                        'departure_date' => $departure_date[$i]['departure_date'],
                        'arrival_date' => $arrival_date[$i]['arrival_date'],
                        'departure_time' => $departure_time[$i]['departure_time'],
                        'arrival_time' => $arrival_time[$i]['arrival_time'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    );
            }
                TicketSector::insert($data1);
                DB::commit();
            }
            catch (\Exception $e) {
                DB::rollback();
                $data = $e->getMessage();
               return redirect(route('tickets.create'))->with('message', $data);
            }
            return redirect(route('ticket.index'))->with('message', 'Ticket has been Added');
    }

    public function edit($id){

        if (empty(trim($id)) or !is_numeric($id)) {
            return redirect(route('ticket.index'));
        }
        $ticket = Ticket::query()
        ->leftJoin('ticket_sectors', 'tickets.id', '=', 'ticket_sectors.ticket_id')
        ->select('tickets.*', 'tickets.id as ticket_id','ticket_sectors.ticket_id', 'ticket_sectors.*')
        ->where('ticket_sectors.ticket_id', $id)
        ->get();
        // echo "<pre>";print_r($ticket);exit;
        return view('admin.Tickets.edit',compact('ticket'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'airline_id' => 'required|string|max:255',
            'adult_price' => 'required|numeric|min:0',
            'child_price' => 'required|numeric|min:0',
            'infants_price' => 'required|numeric|min:0',
            'service_type' => 'required',
            'seats' => 'required|numeric',
            'is_featured' => 'required|in:Yes,No',
            'meal' => 'required|in:Yes,No',
        ], [
            'airline_id.required' => 'Select Airline',
            'adult_price.required' => 'Adult Price Should be Added',
            'child_price.required' => 'Child Price Should be Added',
            'infants_price.required' => 'Infants Price Should be Added',
            'service_type.required' => 'One-Way or Two-Way Service Add',
            'seats.required' => 'Seats Should be Added',
            'is_featured.required' => 'Required',
            'meal.required' => 'Required',
        ]);
       
        // DB::beginTransaction();
        try {
            DB::transaction(function () use ($request, $id) {
            $super_admin_approval = $request->input('super_admin_approval');
              //******************Tickets table update*****************
              $ticket = Ticket::where('id', '=', $id)->update([
                    'airline_id' => $request->input('airline_id'),
                    'adult_price' => $request->input('adult_price'),
                    'child_price' => $request->input('child_price'),
                    'infants_price' => $request->input('infants_price'),
                    'adult_discount' => $request->input('adult_discount'),
                    'child_discount' => $request->input('child_discount'),
                    'infants_discount' => $request->input('infants_discount'),
                    'service_type' => $request->input('service_type'),
                    'seats' => $request->input('seats'),
                    'is_featured' => $request->input('is_featured'),
                    'meal' => $request->input('meal'),
                    'super_admin_approval' => $request->input('super_admin_approval'),
                    'fare_seats' => $request->input('fare_seats'),
                    'seats_policy' => $request->input('seats_policy'),
                    'note' => $request->input('note'),
            ]);
            
            //******************Ticket_Sectors table insertion*****************
            
            // $ticket_id = $request->input('ticket_id');
            $flight_num = $request->input('flight_num');
            $departure = $request->input('departure');
            $destination = $request->input('destination');
            $baggage = $request->input('baggage');
            $departure_date = $request->input('departure_date');
            $arrival_date = $request->input('arrival_date');
            $departure_time = $request->input('departure_time');
            $arrival_time = $request->input('arrival_time');
            // p($id);exit;
            // p($flight_num);
            // p($departure);
            // p($destination);
            // p($baggage);
            // p($departure_date);
            // p($arrival_date);
            // p($departure_time);
            // p($arrival_time);
            
            $ticket_sectors_del = DB::table("ticket_sectors")->where('ticket_id', $id)->delete();
            $counter = count($flight_num);
            // p($counter);
            $data1 = array();
            for ($i = 0; $i < $counter; $i++) {
                $data1[] =
                array(
                        'ticket_id' =>  $id,
                        'flight_num' =>  $flight_num[$i]['flight_num'],
                        'departure' => $departure[$i]['departure'],
                        'destination' => $destination[$i]['destination'],
                        'baggage' =>   $baggage[$i]['baggage'],
                        'departure_date' => $departure_date[$i]['departure_date'],
                        'arrival_date' => $arrival_date[$i]['arrival_date'],
                        'departure_time' => $departure_time[$i]['departure_time'],
                        'arrival_time' => $arrival_time[$i]['arrival_time'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    );
            }
            if (!empty($data1)) {
                TicketSector::insert($data1);
            }
        });
            // DB::commit();
        } catch (\Exception $e) {
            $data = $e->getMessage();
        }
        return redirect(route('ticket.index'))->with('message', 'Ticket has been Updated');
    }

    public function ticket_sector($id){
             $data = DB::table('tickets')
            ->leftJoin('ticket_sectors', 'ticket_sectors.ticket_id', '=', 'tickets.id')
            ->select('ticket_sectors.*','tickets.*')
            ->where('ticket_sectors.ticket_id', '=', $id)
            ->get();
            return response()->json($data);
    }

    public function destroy($id){

        $ticket = Ticket::find($id);
        if ($ticket) {
            $ticketId = $ticket->id;

            $ticket->delete();
            TicketSector::where('ticket_id', $ticketId)->delete();
            return response()->json(['success'=>true,'message' => 'Ticket record deleted successfully']);
        } else {
            return response()->json(['success'=>false,'message' => 'Ticket not found'], 404);
        }
    }
}

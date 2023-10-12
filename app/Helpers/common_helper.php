<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


function get_airline_title($selected = 0)
{
	$reg_array = DB::table('airlines')->select('*')->get();
	$str = '<option value="">Select Airlines</option>';
	foreach ($reg_array as $row) {
		$opt_selected = "";
		if ($selected == $row->id) {
			$opt_selected = "selected";
		}
		$str .= '<option value="' . $row->id . '" ' . $opt_selected . '>' . $row->name . '</option>';
	}
	return $str;
}

function get_departure_title($selected = 0)
{
	$reg_array = DB::table('departures')->select('*')->get();
	$str = '<option value="">Select Departue</option>';
	foreach ($reg_array as $row) {
		$opt_selected = "";
		if ($selected == $row->name) {
			$opt_selected = "selected";
		}
		$str .= '<option value="' . $row->name . '" ' . $opt_selected . '>' . $row->name . '</option>';
	}
	return $str;
}

function get_agents($selected = 0)
{
	$reg_array = DB::table('users')->select('id', 'name')->where('user_type', 'Agent')->get();
	$str = '<option value="">Select Agent</option>';
	foreach ($reg_array as $row) {
		$opt_selected = "";
		if ($selected == $row->id) {
			$opt_selected = "selected";
		}
		$str .= '<option value="' . $row->id . '" ' . $opt_selected . '>' . $row->name . '</option>';
	}
	return $str;
}

function get_agent_slug($selected = 0)
{
	$res = DB::table('agents')->select('slug')->where('user_id', auth()->user()->id)->first();
	return $res->slug;
}
    function p($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
	exit;
	}
     






?>
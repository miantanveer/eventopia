<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\Order;
use Carbon\Carbon;

class BookingsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bookings:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Activating and Completing Booking.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $date = Carbon::parse(now())->toDateString();
            $time = Carbon::parse(now())->format('g A');
            $SpaceEntorders = Order::whereStatus('2')->where('type', '!=', 'service')->where('date', $date)->where('start_time', $time)->get();
            $Serivceorders = Order::whereStatus('2')->where('type', 'service')->where('date', $date)->get();
            foreach ($SpaceEntorders as $SpaceEntorder) {
                $SpaceEntorder->update(['status' => '5']);
            }
            foreach ($Serivceorders as $Serivceorder) {
                $Serivceorder->update(['status' => '5']);
            }

            $ActiveSpaceEntorders = Order::whereStatus('5')->where('type', '!=', 'service')->where('date', '>=', $date)->orWhere('end_time', $time)->get();
            $ActiveSerivceorders = Order::whereStatus('5')->where('type', 'service')->where('date', '>=', $date)->get();

            foreach ($ActiveSpaceEntorders as $ActiveSpaceEntorder) {
                $ActiveSpaceEntorder->update(['status' => '4']);
            }

            foreach ($ActiveSerivceorders as $ActiveSerivceorder) {
                $ActiveSerivceorder->update(['status' => '4']);
            }

        } catch (\Throwable $th) {
            Log::error('Error in AcceptProposals command in cron job: ' . $th->getMessage());
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Phone;

class fixPhonePrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:phonePrice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Used to fix the phone price';

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
        $this->info('getting all phones.....');

        $phones = Phone::all();

        $this->info('fixing.....');

        foreach ($phones as $phone) {
            $phone->price = $phone->price / 100;
            $phone->save();
        }

        $this->info('done!');

        return 0;
    }
}

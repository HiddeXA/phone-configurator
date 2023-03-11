<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use SimpleXMLElement;

class ImportFixJeIphone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:fixJeIphone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports all the data from fix je iphone and updates the stock';

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
        $this->info('Importing fix je iphone');


        //Do a request to https://feeds.tuffel.nl/feeds/fixjeiphone
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://parseapi.back4app.com/classes/Dataset_Cell_Phones_Model_Brand?limit=10',
            'verify' => false
        ]);
        
        $response = $client->request('GET', '');
        $body = $response->getBody();
        $data = simplexml_load_string($body);

        var_dump($data);

        return 0;
    }
}

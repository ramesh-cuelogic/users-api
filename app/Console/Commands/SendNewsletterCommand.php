<?php 
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class SendNewsletterCommand extends Command {

    protected $name = 'sendNewsletter';

    protected $description = "Starts sending newsletter";

    public function fire()
    {
    	echo 'Starts sending newsletter';
    }
}
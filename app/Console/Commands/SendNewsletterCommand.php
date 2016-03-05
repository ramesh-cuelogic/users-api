<?php 
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class SendNewsletterCommand extends Command {

    protected $name = 'sendNewsletter';

    protected $description = "Starts sending newsletter";

    public function fire()
    {
    	$credentials = new \Aws\Credentials\Credentials('AKIAJSXEEFIGFPISAHUA', 'ZgFUPFfZFdSzlQxH546Pv2bEO4u6RlrHQD01+t+P');

        $awsSdk = new \Aws\Sdk([
            'region' => 'us-west-2',
            'version' => 'latest',
            'credentials' => $credentials,
            'DynamoDb' => [
                'region' => 'us-west-2'
            ]
        ]);

        $dynamoDbClient = $awsSdk->createDynamoDb();

		$itemArray = array(
            'Timestamp' => array(
                'N' => (string) time()
            )
            /*,
            'UserId' => array(
                'N' => (string) 5
            )*/
        );

        $response = $dynamoDbClient->putItem(array(
            'TableName' => 'EmailQueue',
            'Item' => $itemArray
        ));
        //print_r($response);
    }
}
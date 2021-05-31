<?php

namespace App\Controller;

use App\Entity\Sms;
use App\Repository\SmsRepository;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \Twilio\Rest\Client;

class Test extends AbstractController
{
    private $twilio;

    public function __construct(Client $twilio) {
        $this->twilio = $twilio;
    }
    //get all fields or sms by id

    /**
     * send sms with twilio
     * 
     * @Route("/api/sms/send/twilio", name="send_sms_twilio", methods={"POST"})
     */
    
    public function sendTwilioSms(Request $request,SerializerInterface $serializer, EntityManagerInterface $em){

        try{
            // get request content
            $jsonIn=$request->getContent();
            //deserialize json 
            $sms=$serializer->deserialize($jsonIn,Sms::Class,'json');

            $sender = '+1*******'; // add your twilio number
            $message = $this->twilio->messages->create(
            $sms->getNummer(), // Send text to this number
            array(
                'from' => $sender,
                //'body' => 'Hello from Awesome Massages. A reminder that your massage appointment is for today at ' . $appoint->getDate()->format('H:i') . '. Call ' . $sender . ' for any questions.'
                'body' => $sms->getText()
                )
            );
            $sms->setSendeid($message->sid);         
            return $this->json($sms,201,[]);

        } catch(NotEncodableValueException $e){
            return this.json([
                'status'=>400,
                'message'=>$e->getMessage()
            ],400);
        }
        
     }
}

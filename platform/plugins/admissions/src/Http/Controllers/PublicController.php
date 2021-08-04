<?php

namespace Botble\Admission\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Admission\Events\SentAdmissionEvent;
use Botble\Admission\Http\Requests\AdmissionRequest;
use Botble\Admission\Repositories\Interfaces\AdmissionInterface;
use EmailHandler;
use Exception;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{
    /**
     * @var AdmissionInterface
     */
    protected $contactRepository;

    /**
     * @param AdmissionInterface $contactRepository
     */
    public function __construct(AdmissionInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param AdmissionRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws \Throwable
     */
    public function postSendAdmission(AdmissionRequest $request, BaseHttpResponse $response)
    {
       // dd($request->all());
        try {
            $contact = $this->contactRepository->getModel();
            $contact->fill($request->input());
            $this->contactRepository->createOrUpdate($contact);

            event(new SentAdmissionEvent($contact));

//            EmailHandler::setModule(CONTACT_MODULE_SCREEN_NAME)
//                ->setVariableValues([
//                    'contact_name'    => $contact->name ?? 'N/A',
//                    'contact_email'   => $contact->email ?? 'N/A',
//                    'contact_phone'   => $contact->phone ?? 'N/A',
//                    'contact_address' => $contact->address ?? 'N/A',
//                    'contact_content' => $contact->content ?? 'N/A',
//                ])
//                ->sendUsingTemplate('notice');

            return $response->setMessage(__('Send message successfully!'));
        } catch (Exception $exception) {
            info($exception->getMessage());
            return $response
                ->setError()
                ->setMessage(trans('plugins/contact::contact.email.failed'));
        }
    }
}

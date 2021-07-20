<?php

namespace Botble\Media\Http\Controllers\API;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Media\Http\Resources\FileResource;
use Botble\Media\Repositories\Interfaces\MediaFileInterface;
use Botble\Media\Services\UploadsManager;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;


class MediaApiController extends Controller
{
  /**
     * @var MediaFileInterface
     */
    protected $fileRepository;

    /**
     * @var UploadsManager
     */
    protected $uploadManager;

    public function __construct(
        MediaFileInterface $fileRepository,
        UploadsManager $uploadManager
    ) {
        $this->fileRepository = $fileRepository;
        $this->uploadManager = $uploadManager;
    }


    public function createMediaFile(Request $request, BaseHttpResponse $response)
    {
        try {
            $file = $this->fileRepository->getModel();

            $filePath = $request->path;
            $data = $this->uploadManager->fileDetails($filePath);
            $file->url = $data['url'];
            $file->size = $data['size'];
            $file->mime_type = $data['mime_type'];
            $file->folder_id = 1;
            $file->user_id = Auth::check() ? Auth::user()->getKey() : 0;
            $file->name = $this->fileRepository->createName($request->name, 1);
            $file = $this->fileRepository->createOrUpdate($file);

            return [
                'error' => false,
                'data'  => new FileResource($file),
            ];
        } catch (Exception $exception) {
            return [
                'error'   => true,
                'message' => $exception->getMessage(),
            ];
        }

    }

}


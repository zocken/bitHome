<?php

namespace Spatie\ResponseCache\Replacers;

use Symfony\Component\HttpFoundation\Response;

class CsrfTokenReplacer implements Replacer
{
    protected string $replacementString = '<laravel-responsecache-csrf-token-here>';
    protected string $replacementStringErrorMsgAndMail = '<laravel-responsecache-error-message>';



    public function prepareResponseToCache(Response $response): void
    {

        if (! $response->getContent()) {
            return;
        }

        $response->setContent(str_replace(
            csrf_token(),
            $this->replacementString,
            $response->getContent()
        ));


        $response->setContent(

            preg_replace('~<div([^>]*)(id\\s*=\\s*["\']removeable["\'])([^>]*)>(.*?)</div>~i',
            $this->replacementStringErrorMsgAndMail,
            $response->getContent()

        ));




    }


    public function replaceInCachedResponse(Response $response): void
    {
        if (! $response->getContent()) {
            return;
        }

        $response->setContent(str_replace(
            $this->replacementString,
            csrf_token(),
            $response->getContent()
        ));

        $response->setContent(str_replace(
            $this->replacementStringErrorMsgAndMail,
            '',
            $response->getContent()
        ));

    }
}

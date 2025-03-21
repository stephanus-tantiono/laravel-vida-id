<?php

declare(strict_types=1);

namespace Ziming\LaravelVidaId\Requests\IdentityVerification;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class GetIdentityVerificationDataRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::GET;

    /*
     * @see https://docs.vida.id/vida-identity-platform/integration-methods/api/identity-verification/api-reference/verification-data
     */
    public function __construct(
        protected readonly string $eventId
    ) {}

    public function resolveEndpoint(): string
    {
        return "/kyc/{$this->eventId}/kycdata";
    }
}

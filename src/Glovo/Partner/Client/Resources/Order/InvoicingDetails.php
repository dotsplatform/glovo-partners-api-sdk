<?php
/**
 * Description of InvoicingDetails.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Partner\Client\Resources\Order;

use Dots\Data\DTO;

class InvoicingDetails extends DTO
{
    protected string $company_name;

    protected string $company_address;

    protected string $tax_id;

    public function getCompanyName(): string
    {
        return $this->company_name;
    }

    public function getCompanyAddress(): string
    {
        return $this->company_address;
    }

    public function getTaxId(): string
    {
        return $this->tax_id;
    }
}

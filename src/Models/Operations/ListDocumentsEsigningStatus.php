<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


/** Return documents currently having this status in the eSigning process, can be comma separated */
enum ListDocumentsEsigningStatus: string
{
    case NotSent = 'not_sent';
    case SentToLegal = 'sent_to_legal';
    case LegalDeclined = 'legal_declined';
    case Sent = 'sent';
    case Signed = 'signed';
    case RejectedBySigner = 'rejected_by_signer';
    case FinishedButPartiallySigned = 'finished_but_partially_signed';
    case Revoked = 'revoked';
}

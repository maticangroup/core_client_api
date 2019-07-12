<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 30/06/19
 * Time: 20:39
 */

namespace Matican\Core\Transaction;


class ResponseStatus
{
    const successful = 200;
    const record_not_found = 404;
    const input_parameter_is_missing = 100;
    const not_possible_logically = 101;
    const action_not_found = 102;
    const record_added_successfully = 103;
    const uploaded_file_is_missing = 104;
    const not_allowed_file_extension = 105;
    const upload_successful = 106;
    const image_media_fetched_successfully = 107;
}
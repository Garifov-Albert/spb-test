<?php

class Edit
{
    function custom($args)
    {
        unset($args[0]);
        $result = [];
        $result['command_name'] = $args[1];
        unset($args[1]);
        foreach ($args as $item)
        {
            if(preg_match('/[\[\]\']/u', $item))
            {
                $option = explode('=', str_replace(array( '[', ']' ), '', $item));
                $result['Options'][$option[0]][] = $option[1];
            } else {
                $result['Arguments'][] = str_replace(array( '{', '}' ), '', $item);
            }
        }
        return $result;
    }
}

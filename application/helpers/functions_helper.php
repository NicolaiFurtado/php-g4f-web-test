<?php
/**
 * Created by PhpStorm.
 * User: aparecebrasil
 * Date: 08/12/2018
 * Time: 01:29
 */

if (!function_exists('dateFormatter')) {
    function dateFormatter($date, $type)
    {
        if ($date != '') {
            if ($type == 1) {
                /**
                 * INPUT: DD/MM/YYY
                 * OUTPUT: YYYY-MM-DD
                 */
                $splitDate = explode('/', $date);
                return $splitDate[2] . '-' . $splitDate[1] . '-' . $splitDate[0];
            }
            if ($type == 2) {
                /**
                 * INPUT: YYYY-MM-DD
                 * OUTPUT: DD/MM/YYY
                 */
                $splitDate = explode('-', $date);
                return $splitDate[2] . '/' . $splitDate[1] . '/' . $splitDate[0];
            }
        }
        return null;
    }
}

if (!function_exists('remainingDays')) {
    function remainingDays($futureDate)
    {
        if ($futureDate != '') {
            $today = new DateTime(date('Y-m-d'));
            $final = new DateTime($futureDate);
            $interval = $today->diff($final);
            return str_replace("+", "", $interval->format('%R%a dias'));
        }
        return null;
    }
}

if (!function_exists('remainingDaysAndTime')) {
    function remainingDaysAndTime($endDate, $endTime) {
        $now = new DateTime();
        $endTime = new DateTime($endDate);
        $interval = $now->diff($endTime);

        $days = $interval->format('%a');
        $hours = str_pad($interval->format('%h'), 2, '0', STR_PAD_LEFT);
        $minutes = str_pad($interval->format('%i'), 2, '0', STR_PAD_LEFT);
        $seconds = str_pad($interval->format('%s'), 2, '0', STR_PAD_LEFT);

        return 'Faltam ' . $days . ' dias - ' . $hours . ':' . $minutes . ':' . $seconds;
    }
}

if (!function_exists('reqInput')) {
    function reqInput()
    {
        return '<span style="color:#A62917">*</span>';
    }
}
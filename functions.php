<?php
if (!function_exists('calculateAvailableLeave')) {
    function calculateAvailableLeave($hireDate, $currentDate)
    {
        $daysWorked = (strtotime($currentDate) - strtotime($hireDate)) / (60 * 60 * 24);
        $yearsWorked = floor($daysWorked / 365);
        $monthsWorked = floor(($daysWorked % 365) / 30);

        $totalLeave = ($yearsWorked * 15) + ($monthsWorked * 1.25);
        return $totalLeave;
    }
}
?>

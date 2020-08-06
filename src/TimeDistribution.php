<?php


namespace TimeDistribution;


class TimeDistribution
{
    /**
     * @param int $quantity
     * @param int $t_min
     * @param int $t_max
     * @param int $c
     * @return float[]
     */
    public final function distributeTime($quantity, $t_min, $t_max, $c = 1)
    {
        $free_time = $t_max - $t_min;
        $time = 0;
        $result = [];
        
        for ($i = 0; $i <= $quantity; $i++){
            $result[] = rand($free_time / $quantity, $free_time / 2) / ($quantity * $c);
            $time += $result[$i];
        }
        $leftovers = ($free_time - $time)/($quantity+1);

        for ($i = 0; $i <= $quantity; $i++){
            $result[$i] += $leftovers;
        }

        return $result;

    }

}

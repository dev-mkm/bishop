<?php

namespace App\Http\Controllers;

use App\Http\Requests\BishopRequest;

class bishop extends Controller
{
    public function __invoke(BishopRequest $request)
    {
        $validated = $request->validated();
        if ($validated['number'] == 0) {
            return $validated['startPos'] == $validated['endPos'] ? 'True' : 'False';
        } else {
            $row = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,
                'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];
            $pos = str_split($validated['startPos'], 1);
            $pos2 = str_split($validated['endPos'], 1);
            $diff = abs($row[$pos[0]] - $row[$pos2[0]]) + abs($pos[1] - $pos2[1]);
            if ($diff % 2 == 0) {
                if ($validated['number'] == 1) {
                    return abs($row[$pos[0]] - $row[$pos2[0]]) == abs($pos[1] - $pos2[1]) && $validated['startPos'] != $validated['endPos'] ? 'True' : 'False';
                } else {
                    return 'True';
                }
            } else {
                return 'False';
            }
        }
    }
}

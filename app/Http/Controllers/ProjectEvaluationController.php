<?php

namespace App\Http\Controllers;

use App\Models\Evaluarproyecto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ProjectEvaluationController extends Controller
{
    public function evaluate_algorithm($project_pdf_path)
    {
        $pythonExecutable = 'C:/laragon/www/ProMeFi/myenv/Scripts/python.exe';
        $scriptPath = 'C:/laragon/www/ProMeFi/python-scripts/evaluate_algorithm.py';
        $full_pdf_path = str_replace('\\', '/', storage_path('app/' . $project_pdf_path));

        $command = escapeshellcmd("{$pythonExecutable} {$scriptPath} {$full_pdf_path}");
        $output = null;
        $resultCode = null;
        exec($command, $output, $resultCode);

        if ($resultCode !== 0) {
            throw new Exception("Error executing Python script: " . implode("\n", $output));
        }

        return implode("\n", $output);
    }

    public function generateEvaluationReport($id)
    {
        $evaluarproyecto = Evaluarproyecto::findOrFail($id);
        $pdf_path = $evaluarproyecto->documento_proyecto;

        $evaluation_report = $this->evaluate_algorithm($pdf_path);

        $evaluarproyecto->evaluation_report = $evaluation_report;
        $evaluarproyecto->save();

        return view('evaluarproyecto.evaluation_report', compact('evaluarproyecto', 'evaluation_report'));
    }
}

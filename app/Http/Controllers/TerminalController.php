<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSH;

class TerminalController extends Controller
{

    private $output;

    public function index()
    {
        return view('admin.terminal.index');
    }

    public function deploy()
    {
        $this->runCommands([
            'cd kesatriakeyboard',
            'git pull origin master'
        ]);

        $output = nl2br($this->output);
        return view('admin.terminal.index', compact('output'));
    }

    public function update()
    {
        $this->runCommands([
            'cd kesatriakeyboard',
            'composer update'
        ]);

        $output = nl2br($this->output);
        return view('admin.terminal.index', compact('output'));
    }

    private function runCommands(array $commands){
        $this->output = '';
        SSH::run($commands, function($line){
            $this->output .= $line.PHP_EOL;
        });
    }
}

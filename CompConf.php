<?php

/**
 * CompConf
 * Computer component configuration
 * @author Martin Halva <ia11mhal@vosvdf.cz>
 * @version 1.0.0
 * @since 1.0.0
 * @license MIT
 */


class PC {

    /**
     * define variable $powersupply
     * @var string 
     */
    private $powersupply;

    /**
     * define variable $performancePowersupply
     * @var int
     */
    private $performancePowersupply;

    /**
     * define variable $Motherboard
     * @var string
     */
    private $motherboard;

    /**
     * define variable $RAMslots
     * @var int
     */
    private $RAMslots;

    /**
     * define variable $socket
     * @var string 
     */
    private $socket;

    /**
     * define variable $bus
     * @var string 
     */
    private $bus;

    /**
     * define array $RAM
     * @var array
     */
    private $RAM = array();

    /**
     * define variable $proceros
     * @var string 
     */
    private $CPU;

    /**
     * define variable $tact
     * @var int
     */
    private $tact;

    /**
     * define variable $cores
     * @var int
     */
    private $cores;

    /**
     * define variable $graphics
     * @var string 
     */
    private $graphics;

    /**
     * define variable $gpu
     * @var string
     */
    private $gpu;

    /**
     * define variable $gddr
     * @var int
     */
    private $gddr;

    /**
     * function __toString
     * generate html table with PC components
     * @return string 
     */
    public function __toString() {
        $h = "";
        $h = $h . "<table border='1'>";
        $pole = array("powersupply", "performancePowersupply", "motherboard", "RAMslots", "socket", "bus", "CPU", "tact", "cores", "graphics", "gpu", "gddr");
for ($i = 0; $i < 12; $i++) {
            $h = $h . "<tr>";
            $h = $h . "<td border='1'>";
            $h = $h . $pole[$i];
            $h = $h . "</td>";
            $h = $h . "<td>";
            if ($i === 0) {
                $h = $h . $this->powersupply;
            }
            if ($i === 1) {
                $h = $h . $this->performancePowersupply;
            }
            if ($i === 2) {
                $h = $h . $this->motherboard;
            }
            if ($i === 3) {
                $h = $h . $this->RAMslots;
            }
            if ($i === 4) {
                $h = $h . $this->socket;
            }
            if ($i === 5) {
                $h = $h . $this->bus;
            }
            if ($i === 6) {
                $h = $h . $this->CPU;
            }
            if ($i === 7) {
                $h = $h . $this->tact;
            }
            if ($i === 8) {
                $h = $h . $this->cores;
            }
            if ($i === 9) {
                $h = $h . $this->graphics;
            }
            if ($i === 10) {
                $h = $h . $this->gpu;
            }
            if ($i === 11) {
                $h = $h . $this->gddr;
            }
            $h = $h . "</td>";
            $h = $h . "</tr>";
        }

        $h = $h . "<tr>";
        $h = $h . "<td>";
        $h = $h . "ram:";
        $h = $h . "</td>";
        $h = $h . "<td>";
        $pom = "";
        for ($i = 0; $i < count($this->RAM); $i++) {
            if (isset($this->RAM[$i])) {
                $pom = $pom + $this->RAM[$i];
            }
        }
        $h = $h . $pom;
        $h = $h . "</td>";
        $h = $h . "</tr>";

        $h = $h . "</table>";

        return $h;
    }

    /**
     * function __construct
     */
    public function __construct() {
        
    }

    /**
     * function setPowersupply
     * set parameters of power supply
     * define values of computer power supply
     * @paRAM string $title title of power supply
     * @paRAM int $performance performance value
     * set variable $title
     * set variable $performance
     */
    public function setpowersupply($title, $performance) {
        $this->powersupply = $title;
        $this->performancePowersupply = $performance;
    }

    /**
     * function setMotherboard
     * set parameters of motherboard
     * @paRAM string $title title of motherboard
     * @paRAM int $RAMslot number of RAM slots
     * @paRAM string $socket motherboard sockets
     * @paRAM string $bus type of bus
     */
    public function setmotherboard($title, $RAMslots, $socket, $bus) {
        $this->motherboard = $title;
        $this->RAMslots = $RAMslots;
        $this->socket = $socket;
        $this->bus = $bus;
    }

    /**
     * function setCpu
     * set parameters of CPU
     * @paRAM string $title title of cpu
     * @paRAM string $socket 
     * @paRAM int $tact CPU tact value
     * @paRAM int $cores number of CPU cores
     */
    public function setcpu($title, $socket, $tact, $cores) {
        if ($socket == $this->socket) {
            $this->CPU = $title;
            $this->tact = $tact;
            $this->cores = $cores;
        } else {
            echo"This CPU: $this->CPU  with this socker: $this->socket isn't compatible";
        }
    }

    /**
     * function setGraphics
     * set GPU parameters
     * @paRAM string $title GPU title
     * @paRAM string $gpu GPU
     * @paRAM int $gddr number of gddr
     * @paRAM int $bus number of bus
     */
    public function setgraphics($title, $gpu, $gddr, $bus) {
        if ($bus == $this->bus) {
            $this->graphics = $title;
            $this->gpu = $gpu;
            $this->gddr = $gddr;
        } else {
            echo"This graphic card: $this->gpu isn't compatible with this bus: $this->bus";
        }
    }

    /**
     * function setRam
     * set position and size of RAM
     * @paRAM int $position position of RAM
     * @paRAM int $size size of RAM
     */
    public function setRam($position, $size) {
        $position = $position - 1;
        if ($position < $this->RAMslots - 1) {
            if (isset($this->RAM[$position])) {
                echo "This socket is full";
            } else {
                $this->RAM[$position] = $size;
            }
        }
    }

    /**
     * function unsetRam
     * unset RAM position
     * @paRAM int $position 
     */
    public function unsetRam($position) {
        $this->RAM[$position - 1] = "";
    }

}

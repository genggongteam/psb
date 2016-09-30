<?php


/**
 * Adds a custom Debug Bar Panel type "MyDebugBarPanel"
 *
 * @package DebugMyPlugin\MyDebugBarPanel
 * @author Lance Cleveland <lance@charlestonsw.com>
 * @copyright 2013-2014 Charleston Software Associates, LLC
 *
 */
class DebugMyPluginPanel extends Debug_Bar_Panel {

    /**
     * An array of HTML strings that we will render someday. Maybe.
     *
     * @var string[] $messages
     */
    private $messages;

    /**
     * The label for this panel.
     *
     * @var string $label
     */
    private $label;

    function DebugMyPluginPanel($label='') {
        if ($label == '') { $this->label = __( 'My Plugin', 'csa-dmp' ); }
        else              { $this->label = $label;                       }
        parent::__construct();
    }

    /**
     * Add a new message to this panel.
     *
     * @param string $header the section header, should not include HTML but it can
     * @param string $message a message, can include HTML
     * @param string $file - file of the call (__FILE__)
     * @param int $line - line number of the call (__LINE__)
     * @param boolean $notime - show time? default true = yes.
     * @param boolean $counter - show global message counter
     * @return null
     */
    function addMessage($header='',$message='',$file=null,$line=null, $notime=false, $use_counter=null) {
        if ($use_counter === null) {
            $use_counter = (DebugMyPlugin::$counter !== null);
        }
        $this->messages[] =
                (($header!=='')?'<h3>'.($use_counter?DebugMyPlugin::$counter++.': ':'').$header.'</h3>':'') .
                (($line !== null)?" on line $line":'').
                (($file !== null)?"<br/> in $file":'').
                ((($file !== null)||($line!==null))?'<br/>':'').
                ($notime?'':'<em> at '. current_time('mysql').'</em>').
                ((($file !== null)||($line!==null))?'<br/>':'').
                $message 
                ;
    }

    /**
     * Add a print_r stack wrapped in pre tags to the message output.
     * 
     * @param string $header the section header
     * @param mixed $variable any variable type, usually a named array
     * @param string $file - file of the call (__FILE__)
     * @param int $line - line number of the call (__LINE__)
     * @param boolean $notime - show time? default true = yes.
     * @return null
     */
    function addPR($header='',$variable,$file=null,$line=null, $notime=false) {
        $this->addMessage($header,'<pre>'.print_r($variable,true).'</pre>',$file,$line,$notime);
    }

    /**
     * Instantiate a new debug bar panel for Debug My Plugin.
     *
     * ACTION: dmp_panelinit_DebugMyPluginPanel
     *
     * note that the action name will change for each class that extends this base class.
     *
     * For example, if your project extends this class to add a new custom DMP panel:
     *
     *
     * class DMPPanelSLPTag               extends DebugMyPluginPanel {
     *   function __construct() {
     *       parent::__construct('SLP Tagalong');
     *   }
     *  }
     *
     * The action would be dmp_panelinit_DMPPanelSLPTag
     *
     */
	public function init() {
		$this->title($this->label);
        do_action('dmp_panelinit_'.get_class($this), $this);
	}

    /**
     * Draw our panel contents.
     *
     * If we have messages we can assume they came from a transient.
     * Delete them, and then delete the transient.
     */
	public function render() {
        if (is_array($this->messages)) {
            foreach ($this->messages as $message) {
                print "<div class='dmp_message'>$message</div>";
            }
        } else {
           print "<div class='dmp_message'>";
           print __('Dad. Explorer. Rum Lover. Code Geek. Not necessarily in that order.','csa-dmp');
           print "</div>";
        }
    }
}

// Dad. Husband. Rum Lover. Code Geek. Not necessarily in that order.
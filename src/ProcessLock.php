<?php



namespace happyproff\YiiProcessLock;



class ProcessLock extends CApplicationComponent {



    /**
     * @param int $id
     */
    public function checkIn ($id) {

        $lockFile = Yii::getPathOfAlias('runtime') . "/lock_$id";
        if (file_exists($lockFile)) {
            $processId = file_get_contents($lockFile);
            if (file_exists("/proc/$processId")) {
                echo 'Process already running' . PHP_EOL;
                Yii::app()->end();
            }
        }
        file_put_contents($lockFile, getmypid());

    }



}

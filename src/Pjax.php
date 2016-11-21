<?php
/**
 * User: Ian Vital
 * Date: 2016/11/21 0021
 * Time: 下午 4:42
 */

namespace Vital\Pjaxer;

class Pjax
{
    /**
     * @param string $triger
     * @param string $body
     * @return string
     */
    public function pjax(){

        $trigger = config('pjax.trigger');

        $container = config('pjax.container');

        $bar_background = config('pjax.bar-background');

        $spinner_background = config('pjax.spinner-background');

        $script = "
        <style>
            #nprogress .bar{
                background: $bar_background;
            }
            #nprogress .spinner-icon{
                border-top-color: $spinner_background;
                border-left-color: $spinner_background;
            }
            #nprogress .peg{
                box-shadow: 0 0 10px $bar_background,0 0 5px $bar_background;
            }
        </style>
        <script>
            $(document).ready(function() {
                $(document).pjax('$trigger', '$container');
                $(document).on('pjax:start', function() {
                    NProgress.start();
                });
                $(document).on('pjax:end', function() {
                    NProgress.done();
                    self.siteBootUp();
                })
            })
        </script>";

        return $script;
    }

}
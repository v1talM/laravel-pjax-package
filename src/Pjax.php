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
                background: $bar_background !important;
            }
            #nprogress .spinner-icon{
                border-top-color: $spinner_background !important;
                border-left-color: $spinner_background !important;
            }
            #nprogress .peg{
                box-shadow: 0 0 10px $bar_background,0 0 5px $bar_background !important;
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

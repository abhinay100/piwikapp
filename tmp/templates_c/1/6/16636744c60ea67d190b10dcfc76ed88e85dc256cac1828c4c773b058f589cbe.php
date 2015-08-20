<?php

/* @ScheduledReports/_listReports.twig */
class __TwigTemplate_16636744c60ea67d190b10dcfc76ed88e85dc256cac1828c4c773b058f589cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id='entityEditContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th class=\"first\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
        echo "</th>
            <th>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EmailSchedule")), "html", null, true);
        echo "</th>
            <th>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportFormat")), "html", null, true);
        echo "</th>
            <th>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SendReportTo")), "html", null, true);
        echo "</th>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Download")), "html", null, true);
        echo "</th>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
        echo "</th>
            <th>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
        echo "</th>
        </tr>
        </thead>

    ";
        // line 15
        if (((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) == "anonymous")) {
            // line 16
            echo "        <tr>
            <td colspan='7'>
                <br/>
                ";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_MustBeLoggedIn")), "html", null, true);
            echo "
                <br/>&rsaquo; <a href='index.php?module=";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <br/><br/>
            </td>
        </tr>
    ";
        } elseif (twig_test_empty(        // line 24
(isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")))) {
            // line 25
            echo "        <tr>
            <td colspan='7'>
                <br/>
                ";
            // line 28
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ThereIsNoReportToManage", (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"))));
            echo ".
                <br/><br/>
            </td>
        </tr>
    ";
        } else {
            // line 33
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 34
                echo "        <tr>
            <td class=\"first\">
                ";
                // line 36
                echo $this->getAttribute($context["report"], "description", array());
                echo "
                ";
                // line 37
                if (((isset($context["segmentEditorActivated"]) ? $context["segmentEditorActivated"] : $this->getContext($context, "segmentEditorActivated")) && $this->getAttribute($context["report"], "idsegment", array()))) {
                    // line 38
                    echo "                    <div class=\"entityInlineHelp\" style=\"font-size: 9pt;\">
                        ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["savedSegmentsById"]) ? $context["savedSegmentsById"] : $this->getContext($context, "savedSegmentsById")), $this->getAttribute($context["report"], "idsegment", array()), array(), "array"), "html", null, true);
                    echo "
                    </div>
                ";
                }
                // line 42
                echo "            </td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : $this->getContext($context, "periods")), $this->getAttribute($context["report"], "period", array()), array(), "array"), "html", null, true);
                echo "
                <!-- Last sent on ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "ts_last_sent", array()), "html", null, true);
                echo " -->
            </td>
            <td>
                ";
                // line 47
                if ( !twig_test_empty($this->getAttribute($context["report"], "format", array()))) {
                    // line 48
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["report"], "format", array())), "html", null, true);
                    echo "
                ";
                }
                // line 50
                echo "            </td>
            <td>
                ";
                // line 53
                echo "                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["report"], "recipients", array())) == 0)) {
                    // line 54
                    echo "                    ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_NoRecipients")), "html", null, true);
                    echo "
                ";
                } else {
                    // line 56
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["report"], "recipients", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                        // line 57
                        echo "                        ";
                        echo twig_escape_filter($this->env, $context["recipient"], "html", null, true);
                        echo "
                        <br/>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                    ";
                    // line 61
                    echo "                    <a href=\"#\" idreport=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                    echo "\" name=\"linkSendNow\" class=\"link_but withIcon\" style=\"margin-top:3px;\">
                        <img border=0 src='";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reportTypes"]) ? $context["reportTypes"] : $this->getContext($context, "reportTypes")), $this->getAttribute($context["report"], "type", array()), array(), "array"), "html", null, true);
                    echo "'/>
                        ";
                    // line 63
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SendReportNow")), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 66
                echo "            </td>
            <td>
                ";
                // line 69
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "API", "segment" => null, "token_auth" => (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "method" => "ScheduledReports.generateReport", "idReport" => $this->getAttribute(                // line 70
$context["report"], "idreport", array()), "outputType" =>                 // line 71
(isset($context["downloadOutputType"]) ? $context["downloadOutputType"] : $this->getContext($context, "downloadOutputType")), "language" => (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "format" => ((twig_in_filter($this->getAttribute(                // line 72
$context["report"], "format", array()), array(0 => "html", 1 => "csv"))) ? ($this->getAttribute($context["report"], "format", array())) : (false))))), "html", null, true);
                // line 73
                echo "\"
                   rel=\"noreferrer\"  target=\"_blank\" name=\"linkDownloadReport\" id=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                echo "\" class=\"link_but withIcon\">
                    <img src='";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reportFormatsByReportType"]) ? $context["reportFormatsByReportType"] : $this->getContext($context, "reportFormatsByReportType")), $this->getAttribute($context["report"], "type", array()), array(), "array"), $this->getAttribute($context["report"], "format", array()), array(), "array"), "html", null, true);
                echo "' border=\"0\"/>
                    ";
                // line 76
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Download")), "html", null, true);
                echo "
                </a>
            </td>
            <td>
                ";
                // line 81
                echo "                <a href='#' name=\"linkEditReport\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                echo "\" class=\"link_but withIcon\">
                    <img src='plugins/Morpheus/images/ico_edit.png' border=\"0\"/>
                    ";
                // line 83
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                echo "
                </a>
            </td>
            <td>
                ";
                // line 88
                echo "                <a href='#' name=\"linkDeleteReport\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "idreport", array()), "html", null, true);
                echo "\" class=\"link_but withIcon\">
                    <img src='plugins/Morpheus/images/ico_delete.png' border=\"0\"/>
                    ";
                // line 90
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                echo "
                </a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "    ";
        }
        // line 96
        echo "
    </table>
    ";
        // line 98
        if (((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) != "anonymous")) {
            // line 99
            echo "        <br/>
        <div id='linkAddReport' class=\"addrow\"><img src='plugins/Morpheus/images/add.png'/> ";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateAndScheduleReport")), "html", null, true);
            echo "</div>
        <br/>
        <br/>
    ";
        }
        // line 104
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/_listReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 104,  251 => 100,  248 => 99,  246 => 98,  242 => 96,  239 => 95,  228 => 90,  222 => 88,  215 => 83,  209 => 81,  202 => 76,  198 => 75,  194 => 74,  191 => 73,  189 => 72,  188 => 71,  187 => 70,  185 => 69,  181 => 66,  175 => 63,  171 => 62,  166 => 61,  164 => 60,  154 => 57,  149 => 56,  143 => 54,  140 => 53,  136 => 50,  130 => 48,  128 => 47,  122 => 44,  118 => 43,  115 => 42,  109 => 39,  106 => 38,  104 => 37,  100 => 36,  96 => 34,  91 => 33,  83 => 28,  78 => 25,  76 => 24,  67 => 20,  63 => 19,  58 => 16,  56 => 15,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}

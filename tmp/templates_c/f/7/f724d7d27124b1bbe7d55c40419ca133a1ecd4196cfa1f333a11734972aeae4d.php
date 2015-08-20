<?php

/* @ScheduledReports/index.twig */
class __TwigTemplate_f724d7d27124b1bbe7d55c40419ca133a1ecd4196cfa1f333a11734972aeae4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@ScheduledReports/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"emailReports\">
    <h2 piwik-enriched-headline
        help-url=\"http://piwik.org/docs/email-reports/\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_PersonalEmailReports")), "html", null, true);
        echo "</h2>

    ";
        // line 9
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@ScheduledReports/index.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"top_controls\">
        ";
        // line 12
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@ScheduledReports/index.twig", 12)->display($context);
        // line 13
        echo "    </div>

    <span id=\"reportSentSuccess\"></span>
    <span id=\"reportUpdatedSuccess\"></span>

    <div class=\"entityContainer\">
        ";
        // line 19
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@ScheduledReports/index.twig", 19);
        // line 20
        echo "        ";
        echo $context["ajax"]->geterrorDiv();
        echo "
        ";
        // line 21
        echo $context["ajax"]->getloadingDiv();
        echo "
        ";
        // line 22
        $this->loadTemplate("@ScheduledReports/_listReports.twig", "@ScheduledReports/index.twig", 22)->display($context);
        // line 23
        echo "        ";
        $this->loadTemplate("@ScheduledReports/_addReport.twig", "@ScheduledReports/index.twig", 23)->display($context);
        // line 24
        echo "        <a id='bottom'></a>
    </div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_AreYouSureDeleteReport")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<script type=\"text/javascript\">
    var ReportPlugin = {};
    ReportPlugin.defaultPeriod = '";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["defaultPeriod"]) ? $context["defaultPeriod"] : $this->getContext($context, "defaultPeriod")), "html", null, true);
        echo "';
    ReportPlugin.defaultHour = '";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["defaultHour"]) ? $context["defaultHour"] : $this->getContext($context, "defaultHour")), "html", null, true);
        echo "';
    ReportPlugin.defaultReportType = '";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["defaultReportType"]) ? $context["defaultReportType"] : $this->getContext($context, "defaultReportType")), "html", null, true);
        echo "';
    ReportPlugin.defaultReportFormat = '";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["defaultReportFormat"]) ? $context["defaultReportFormat"] : $this->getContext($context, "defaultReportFormat")), "html", null, true);
        echo "';
    ReportPlugin.reportList = ";
        // line 40
        echo (isset($context["reportsJSON"]) ? $context["reportsJSON"] : $this->getContext($context, "reportsJSON"));
        echo ";
    ReportPlugin.createReportString = \"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateReport")), "html", null, true);
        echo "\";
    ReportPlugin.updateReportString = \"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_UpdateReport")), "html", null, true);
        echo "\";
    \$(function () {
        initManagePdf();
    });
</script>
<style type=\"text/css\">
    .reportCategory {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .entityAddContainer {
        position:relative;
    }

    #linkAddReport {
        margin-top: 0px;
    }

    #linkAddReport:hover {
        text-decoration: underline;
    }

    .emailReports .top_controls {
        padding-bottom: 18px;
    }

</style>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  88 => 31,  84 => 30,  80 => 29,  73 => 24,  70 => 23,  68 => 22,  64 => 21,  59 => 20,  57 => 19,  49 => 13,  47 => 12,  43 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}

<?php

/* @ScheduledReports/_addReport.twig */
class __TwigTemplate_4d87670264a345f79218762b1a890d0acefc1d0ce2efd0612351dbb974fb73b2 extends Twig_Template
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
        echo "<div class=\"entityAddContainer\" style=\"display:none;\">
    <div class='clear'></div>
    <form id='addEditReport'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr class=\"first\">
                <th colspan=\"2\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateAndScheduleReport")), "html", null, true);
        echo "</th>
            <tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"first\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo " </td>
                <td style=\"width:650px;\">
                    ";
        // line 14
        echo (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"));
        echo "
                </td>
            </tr>
            <tr>
                <td class=\"first\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
        echo " </td>
                <td>
                    <textarea cols=\"30\" rows=\"3\" id=\"report_description\" class=\"inp\"></textarea>

                    <div class=\"entityInlineHelp\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_DescriptionOnFirstPage")), "html", null, true);
        echo "
                    </div>
                </td>
            </tr>
            ";
        // line 27
        if ((isset($context["segmentEditorActivated"]) ? $context["segmentEditorActivated"] : $this->getContext($context, "segmentEditorActivated"))) {
            // line 28
            echo "            <tr>
                <td class=\"first\">";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_ChooseASegment")), "html", null, true);
            echo " </td>
                <td>
                    <select id='report_segment'>
                        <option value=\"\">";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DefaultAllVisits")), "html", null, true);
            echo "</option>
                        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["savedSegmentsById"]) ? $context["savedSegmentsById"] : $this->getContext($context, "savedSegmentsById")));
            foreach ($context['_seq'] as $context["savedSegmentId"] => $context["savedSegmentName"]) {
                // line 34
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["savedSegmentId"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["savedSegmentName"], 0, 50), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['savedSegmentId'], $context['savedSegmentName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </select>

                    <div class=\"entityInlineHelp\">
                        ";
            // line 39
            ob_start();
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_DefaultAllVisits")), "html", null, true);
            $context["SegmentEditor_DefaultAllVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "                        ";
            ob_start();
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_AddNewSegment")), "html", null, true);
            $context["SegmentEditor_AddNewSegment"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 41
            echo "                        ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_Segment_Help", "<a href=\"./\" rel=\"noreferrer\"  target=\"_blank\">", "</a>", (isset($context["SegmentEditor_DefaultAllVisits"]) ? $context["SegmentEditor_DefaultAllVisits"] : $this->getContext($context, "SegmentEditor_DefaultAllVisits")), (isset($context["SegmentEditor_AddNewSegment"]) ? $context["SegmentEditor_AddNewSegment"] : $this->getContext($context, "SegmentEditor_AddNewSegment"))));
            echo "
                    </div>
                </td>
            </tr>
            ";
        }
        // line 46
        echo "            <tr>
                <td class=\"first\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EmailSchedule")), "html", null, true);
        echo "</td>
                <td>
                    <select id=\"report_period\" class=\"inp\">
                        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periods"]) ? $context["periods"] : $this->getContext($context, "periods")));
        foreach ($context['_seq'] as $context["periodId"] => $context["period"]) {
            // line 51
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["periodId"], "html", null, true);
            echo "\">
                                ";
            // line 52
            echo twig_escape_filter($this->env, $context["period"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['periodId'], $context['period'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </select>

                    <div class=\"entityInlineHelp\">
                        ";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_WeeklyScheduleHelp")), "html", null, true);
        echo "
                        <br/>
                        ";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_MonthlyScheduleHelp")), "html", null, true);
        echo "
                        <br/>
                        ";
        // line 62
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportHour", "<input type=\"text\" id=\"report_hour\" class=\"inp\" size=\"2\">"));
        echo "
                    </div>
                </td>
            </tr>

            <tr ";
        // line 67
        if ((twig_length_filter($this->env, (isset($context["reportTypes"]) ? $context["reportTypes"] : $this->getContext($context, "reportTypes"))) == 1)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                <td class=\"first\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportType")), "html", null, true);
        echo "
                </td>
                <td>
                    <select id=\"report_type\">
                        ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportTypes"]) ? $context["reportTypes"] : $this->getContext($context, "reportTypes")));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportTypeIcon"]) {
            // line 74
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["reportType"]), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportTypeIcon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </select>
                </td>
            </tr>

            <tr>
                <td class=\"first\">
                    ";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportFormat")), "html", null, true);
        echo "
                </td>

                <td>
                    ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportFormatsByReportType"]) ? $context["reportFormatsByReportType"] : $this->getContext($context, "reportFormatsByReportType")));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportFormats"]) {
            // line 87
            echo "                        <select name='report_format' class='";
            echo twig_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'>
                            ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["reportFormats"]);
            foreach ($context['_seq'] as $context["reportFormat"] => $context["reportFormatIcon"]) {
                // line 89
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["reportFormat"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["reportFormat"]), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportFormat'], $context['reportFormatIcon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                        </select>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportFormats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </td>
            </tr>

            ";
        // line 96
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.reportParametersScheduledReports"));
        echo "

            <tr class='email' id=\"row_report_display_options\">
                <td class=\"first\">
                    ";
        // line 101
        echo "                    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_AggregateReportsFormat")), "html", null, true);
        echo "
                </td>
                <td>
                    <select id=\"display_format\">
                        ";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["displayFormats"]) ? $context["displayFormats"] : $this->getContext($context, "displayFormats")));
        foreach ($context['_seq'] as $context["formatValue"] => $context["formatLabel"]) {
            // line 106
            echo "                            <option ";
            if (($context["formatValue"] == 1)) {
                echo "selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["formatValue"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["formatLabel"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['formatValue'], $context['formatLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    </select>

                    <div class='report_evolution_graph'>
                        <br/>
                        <input type=\"checkbox\" id=\"report_evolution_graph\"/>
                        <label for=\"report_evolution_graph\"><em>";
        // line 113
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EvolutionGraph", 5)), "html", null, true);
        echo "</em></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td class=\"first\">";
        // line 119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportsIncluded")), "html", null, true);
        echo "</td>
                <td>
                    ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportsByCategoryByReportType"]) ? $context["reportsByCategoryByReportType"] : $this->getContext($context, "reportsByCategoryByReportType")));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportsByCategory"]) {
            // line 122
            echo "                        <div name='reportsList' class='";
            echo twig_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'>

                            ";
            // line 124
            if ($this->getAttribute((isset($context["allowMultipleReportsByReportType"]) ? $context["allowMultipleReportsByReportType"] : $this->getContext($context, "allowMultipleReportsByReportType")), $context["reportType"], array(), "array")) {
                // line 125
                echo "                                ";
                $context["reportInputType"] = "checkbox";
                // line 126
                echo "                            ";
            } else {
                // line 127
                echo "                                ";
                $context["reportInputType"] = "radio";
                // line 128
                echo "                            ";
            }
            // line 129
            echo "
                            ";
            // line 130
            $context["countCategory"] = 0;
            // line 131
            echo "
                            ";
            // line 132
            $context["newColumnAfter"] = intval(floor(((twig_length_filter($this->env, $context["reportsByCategory"]) + 1) / 2)));
            // line 133
            echo "
                            <div id='leftcolumn'>
                                ";
            // line 135
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["reportsByCategory"]);
            foreach ($context['_seq'] as $context["category"] => $context["reports"]) {
                // line 136
                echo "                                ";
                if ((((isset($context["countCategory"]) ? $context["countCategory"] : $this->getContext($context, "countCategory")) >= (isset($context["newColumnAfter"]) ? $context["newColumnAfter"] : $this->getContext($context, "newColumnAfter"))) && ((isset($context["newColumnAfter"]) ? $context["newColumnAfter"] : $this->getContext($context, "newColumnAfter")) != 0))) {
                    // line 137
                    echo "                                ";
                    $context["newColumnAfter"] = 0;
                    // line 138
                    echo "                            </div>
                            <div id='rightcolumn'>
                                ";
                }
                // line 141
                echo "                                <div class='reportCategory'>";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</div>
                                <ul class='listReports'>
                                    ";
                // line 143
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["reports"]);
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 144
                    echo "                                        <li>
                                            <input type='";
                    // line 145
                    echo twig_escape_filter($this->env, (isset($context["reportInputType"]) ? $context["reportInputType"] : $this->getContext($context, "reportInputType")), "html", null, true);
                    echo "' id=\"";
                    echo twig_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "uniqueId", array()), "html", null, true);
                    echo "\" report-unique-id='";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "uniqueId", array()), "html", null, true);
                    echo "'
                                                   name='";
                    // line 146
                    echo twig_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo "Reports'/>
                                            <label for=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "uniqueId", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 148
                    echo $this->getAttribute($context["report"], "name", array());
                    echo "
                                                ";
                    // line 149
                    if (($this->getAttribute($context["report"], "uniqueId", array()) == "MultiSites_getAll")) {
                        // line 150
                        echo "                                                    <div class=\"entityInlineHelp\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ReportIncludeNWebsites", (isset($context["countWebsites"]) ? $context["countWebsites"] : $this->getContext($context, "countWebsites")))), "html", null, true);
                        // line 151
                        echo "</div>
                                                ";
                    }
                    // line 153
                    echo "                                            </label>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                                    ";
                $context["countCategory"] = ((isset($context["countCategory"]) ? $context["countCategory"] : $this->getContext($context, "countCategory")) + 1);
                // line 157
                echo "                                </ul>
                                <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['reports'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportsByCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                </td>
            </tr>

            </tbody>
        </table>

        <input type=\"hidden\" id=\"report_idreport\" value=\"\">
        <input type=\"submit\" id=\"report_submit\" name=\"submit\" class=\"submit\"/>

    </form>
    <div class='entityCancel'>
        ";
        // line 174
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OrCancel", "<a class='entityCancelLink'>", "</a>"));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/_addReport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 174,  424 => 163,  416 => 160,  408 => 157,  405 => 156,  397 => 153,  393 => 151,  390 => 150,  388 => 149,  384 => 148,  379 => 147,  375 => 146,  366 => 145,  363 => 144,  359 => 143,  353 => 141,  348 => 138,  345 => 137,  342 => 136,  338 => 135,  334 => 133,  332 => 132,  329 => 131,  327 => 130,  324 => 129,  321 => 128,  318 => 127,  315 => 126,  312 => 125,  310 => 124,  304 => 122,  300 => 121,  295 => 119,  286 => 113,  279 => 108,  264 => 106,  260 => 105,  252 => 101,  245 => 96,  240 => 93,  233 => 91,  222 => 89,  218 => 88,  213 => 87,  209 => 86,  202 => 82,  194 => 76,  183 => 74,  179 => 73,  172 => 69,  165 => 67,  157 => 62,  152 => 60,  147 => 58,  142 => 55,  133 => 52,  128 => 51,  124 => 50,  118 => 47,  115 => 46,  106 => 41,  101 => 40,  97 => 39,  92 => 36,  81 => 34,  77 => 33,  73 => 32,  67 => 29,  64 => 28,  62 => 27,  55 => 23,  47 => 18,  40 => 14,  35 => 12,  27 => 7,  19 => 1,);
    }
}

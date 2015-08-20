<?php

/* @SEO/getRank.twig */
class __TwigTemplate_64229b17711f031f89fa50a2d7f639413d92bc0ba079d129d43fd2323c25988a extends Twig_Template
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
        echo "<div id='SeoRanks'>
    <script type=\"text/javascript\" src=\"plugins/SEO/javascripts/rank.js\"></script>

    <form method=\"post\" style=\"padding: 8px;\">
        <div align=\"left\" class=\"mediumtext\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SetupWebSiteURL"))), "html", null, true);
        echo "
            <input type=\"text\" id=\"seoUrl\" size=\"15\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["urlToRank"]) ? $context["urlToRank"] : $this->getContext($context, "urlToRank")), "html", null, true);
        echo "\" class=\"textbox\"/>
\t\t  <span style=\"padding-left:2px;\">
\t\t  <input type=\"submit\" id=\"rankbutton\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SEO_Rank")), "html", null, true);
        echo "\"/>
\t\t  </span>
        </div>

        ";
        // line 13
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@SEO/getRank.twig", 13);
        // line 14
        echo "        ";
        echo $context["ajax"]->getLoadingDiv("ajaxLoadingSEO");
        echo "

        <div id=\"rankStats\" align=\"left\" style=\"margin-top:10px;\">
            ";
        // line 17
        if (twig_test_empty((isset($context["ranks"]) ? $context["ranks"] : $this->getContext($context, "ranks")))) {
            // line 18
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
            echo "
            ";
        } else {
            // line 20
            echo "                ";
            ob_start();
            // line 21
            echo "                    <a href=\"http://";
            echo twig_escape_filter($this->env, (isset($context["urlToRank"]) ? $context["urlToRank"] : $this->getContext($context, "urlToRank")), "html", null, true);
            echo "\" rel=\"noreferrer\"  target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["urlToRank"]) ? $context["urlToRank"] : $this->getContext($context, "urlToRank")), "html", null, true);
            echo "</a>
                ";
            $context["cleanUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "                ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SEO_SEORankingsFor", (isset($context["cleanUrl"]) ? $context["cleanUrl"] : $this->getContext($context, "cleanUrl"))));
            echo "
                <table cellspacing=\"2\" style=\"margin:auto;line-height:1.5em;padding-top:10px;\">

                    ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ranks"]) ? $context["ranks"] : $this->getContext($context, "ranks")));
            foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
                // line 27
                echo "                        <tr>
";
                // line 28
                ob_start();
                if ( !twig_test_empty($this->getAttribute($context["rank"], "logo_link", array()))) {
                    echo "<a class=\"linkContent\" href=\"?module=Proxy&action=redirect&url=";
                    echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["rank"], "logo_link", array())), "html", null, true);
                    echo "\"
                                                    target=\"_blank\"
                         ";
                    // line 30
                    if ( !twig_test_empty($this->getAttribute($context["rank"], "logo_tooltip", array()))) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "logo_tooltip", array()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                }
                $context["seoLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 31
                echo "                            ";
                ob_start();
                echo twig_escape_filter($this->env, (isset($context["seoLink"]) ? $context["seoLink"] : $this->getContext($context, "seoLink")), "html", null, true);
                echo "Majestic</a>";
                $context["majesticLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 32
                echo "                            <td>";
                if ( !twig_test_empty($this->getAttribute($context["rank"], "logo_link", array()))) {
                    echo (isset($context["seoLink"]) ? $context["seoLink"] : $this->getContext($context, "seoLink"));
                }
                echo "<img
                                            style='vertical-align:middle;margin-right:6px;' src='";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "logo", array()), "html", null, true);
                echo "' border='0'
                                            alt=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "label", array()), "html", null, true);
                echo "\">";
                if ( !twig_test_empty($this->getAttribute($context["rank"], "logo_link", array()))) {
                    echo "</a>";
                }
                echo " ";
                echo strtr($this->getAttribute($context["rank"], "label", array()), array("Majestic" =>                 // line 35
(isset($context["majesticLink"]) ? $context["majesticLink"] : $this->getContext($context, "majesticLink"))));
                echo "
                            </td>
                            <td>
                                <div style=\"margin-left:15px;\">
                                ";
                // line 39
                if ( !twig_test_empty($this->getAttribute($context["rank"], "logo_link", array()))) {
                    echo (isset($context["seoLink"]) ? $context["seoLink"] : $this->getContext($context, "seoLink"));
                }
                // line 40
                echo "                                    ";
                if ($this->getAttribute($context["rank"], "rank", array())) {
                    echo $this->getAttribute($context["rank"], "rank", array());
                } else {
                    echo "-";
                }
                // line 41
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "rank_suffix", array()), "html", null, true);
                echo "
                                ";
                // line 42
                if ( !twig_test_empty($this->getAttribute($context["rank"], "logo_link", array()))) {
                    echo "</a>";
                }
                // line 43
                echo "                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                </table>
            ";
        }
        // line 50
        echo "        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SEO/getRank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 50,  161 => 47,  152 => 43,  148 => 42,  143 => 41,  136 => 40,  132 => 39,  125 => 35,  118 => 34,  114 => 33,  107 => 32,  101 => 31,  92 => 30,  84 => 28,  81 => 27,  77 => 26,  70 => 23,  62 => 21,  59 => 20,  53 => 18,  51 => 17,  44 => 14,  42 => 13,  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}

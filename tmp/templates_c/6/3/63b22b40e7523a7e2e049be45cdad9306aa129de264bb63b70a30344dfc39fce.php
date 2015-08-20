<?php

/* @MobileMessaging/userSettings.twig */
class __TwigTemplate_63b22b40e7523a7e2e049be45cdad9306aa129de264bb63b70a30344dfc39fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user.twig", "@MobileMessaging/userSettings.twig", 1);
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
    ";
        // line 5
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@MobileMessaging/userSettings.twig", 5);
        // line 6
        echo "
    <div style=\"margin-top:10px\">
        ";
        // line 8
        echo $context["ajax"]->geterrorDiv("ajaxErrorMobileMessagingSettings");
        echo "
    </div>

    ";
        // line 11
        $context["macro"] = $this->loadTemplate("@MobileMessaging/macros.twig", "@MobileMessaging/userSettings.twig", 11);
        // line 12
        echo "
    ";
        // line 13
        if (((isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser")) && (isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement")))) {
            // line 14
            echo "        <h2 piwik-enriched-headline
                >";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSProvider")), "html", null, true);
            echo "</h2>

        ";
            // line 17
            echo $context["macro"]->getmanageSmsApi((isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied")), (isset($context["creditLeft"]) ? $context["creditLeft"] : $this->getContext($context, "creditLeft")), (isset($context["smsProviders"]) ? $context["smsProviders"] : $this->getContext($context, "smsProviders")), (isset($context["provider"]) ? $context["provider"] : $this->getContext($context, "provider")));
            echo "
    ";
        }
        // line 19
        echo "
    <h2>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html", null, true);
        echo "</h2>
    ";
        // line 21
        if ( !(isset($context["credentialSupplied"]) ? $context["credentialSupplied"] : $this->getContext($context, "credentialSupplied"))) {
            // line 22
            echo "        ";
            if (((isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser")) && (isset($context["delegatedManagement"]) ? $context["delegatedManagement"] : $this->getContext($context, "delegatedManagement")))) {
                // line 23
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialNotProvided")), "html", null, true);
                echo "
        ";
            } elseif (            // line 24
(isset($context["accountManagedByCurrentUser"]) ? $context["accountManagedByCurrentUser"] : $this->getContext($context, "accountManagedByCurrentUser"))) {
                // line 25
                echo "            Before you can create and manage phone numbers, please setup an SMS provider in <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "index"))), "html", null, true);
                echo "\">admin mobile messaging settings</a>.
        ";
            } else {
                // line 27
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialNotProvidedByAdmin")), "html", null, true);
                echo "
        ";
            }
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_Help")), "html", null, true);
            echo "
        <br/>
        <br/>
        <table style=\"width:900px;\" class=\"adminTable\">
            <tbody>
            <tr>
                <td style=\"width:480px;\">
                    <strong>";
            // line 37
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_Add")), "html", null, true);
            echo "</strong>
                    <br/><br/>

                <span id=\"suspiciousPhoneNumber\" style=\"display:none;\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SuspiciousPhoneNumber", "54184032")), "html", null, true);
            echo "
                    <br/><br/>
                </span>

                    + <input id=\"countryCallingCode\" size=\"4\" maxlength=\"4\"/>&nbsp;
                    <input id=\"newPhoneNumber\"/>
                    <input type=\"submit\" value='";
            // line 47
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
            echo "'
                           id=\"addPhoneNumberSubmit\"/>
                    <br/>

\t\t<span style=' font-size: 11px;'><span
                    class=\"form-description\">";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CountryCode")), "html", null, true);
            echo "</span>
\t\t\t<span class=\"form-description\"
                  style=\"margin-left:50px;\">";
            // line 54
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumber")), "html", null, true);
            echo "</span></span>
                    <br/><br/>

                    ";
            // line 57
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_CountryCode_Help")), "html", null, true);
            echo "

                    <select id=\"countries\">
                        ";
            // line 61
            echo "                        <option value=\"\">&nbsp;</option>
                        ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
            foreach ($context['_seq'] as $context["countryCode"] => $context["country"]) {
                // line 63
                echo "                            <option value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "countryCallingCode", array()), "html", null, true);
                echo "'
                                    ";
                // line 64
                if (((isset($context["defaultCountry"]) ? $context["defaultCountry"] : $this->getContext($context, "defaultCountry")) == $context["countryCode"])) {
                    echo " selected=\"selected\" ";
                }
                // line 65
                echo "                                    >
                                ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "countryName", array()), "html", null, true);
                echo "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['countryCode'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    </select>

                </td>
                <td style=\"width:220px;\">
                    ";
            // line 73
            $context["piwik"] = $this->loadTemplate("macros.twig", "@MobileMessaging/userSettings.twig", 73);
            // line 74
            echo "                    ";
            echo $context["piwik"]->getinlineHelp((isset($context["strHelpAddPhone"]) ? $context["strHelpAddPhone"] : $this->getContext($context, "strHelpAddPhone")));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"2\">

                    ";
            // line 80
            if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers"))) > 0)) {
                // line 81
                echo "                        <br/>
                        <br/>
                        <strong>";
                // line 83
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_ManagePhoneNumbers")), "html", null, true);
                echo "</strong>
                        <br/>
                        <br/>
                    ";
            }
            // line 87
            echo "
                    ";
            // line 88
            echo $context["ajax"]->geterrorDiv("invalidVerificationCodeAjaxError");
            echo "

                    <div id='phoneNumberActivated' style=\"display:none;\">
                        ";
            // line 91
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneActivated")), "html", null, true);
            echo "
                    </div>

                    <div id='invalidActivationCode' style=\"display:none;\">
                        ";
            // line 95
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_InvalidActivationCode")), "html", null, true);
            echo "
                    </div>

                    <ul>
                        ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : $this->getContext($context, "phoneNumbers")));
            foreach ($context['_seq'] as $context["phoneNumber"] => $context["validated"]) {
                // line 100
                echo "                            <li>
                                <span class='phoneNumber'>";
                // line 101
                echo twig_escape_filter($this->env, $context["phoneNumber"], "html", null, true);
                echo "</span>
                                ";
                // line 102
                if ( !$context["validated"]) {
                    // line 103
                    echo "                                    <input class='verificationCode'/>
                                    <input
                                            type='submit'
                                            value='";
                    // line 106
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_ValidatePhoneNumber")), "html", null, true);
                    echo "'
                                            class='validatePhoneNumberSubmit'
                                            />
                                ";
                }
                // line 110
                echo "                                <input
                                        type='submit'
                                        value='";
                // line 112
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Remove")), "html", null, true);
                echo "'
                                        class='removePhoneNumberSubmit'
                                        />
                                ";
                // line 115
                if ( !$context["validated"]) {
                    // line 116
                    echo "                                    <br/>
                                    <span class='form-description'>";
                    // line 117
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_VerificationCodeJustSent")), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 119
                echo "                                <br/>
                                <br/>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['phoneNumber'], $context['validated'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    </ul>

                </td>
            </tr>
            </tbody>
        </table>
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        echo $context["ajax"]->getloadingDiv("ajaxLoadingMobileMessagingSettings");
        echo "

    <div class='ui-confirm' id='confirmDeleteAccount'>
        <h2>";
        // line 134
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_DeleteAccountConfirm")), "html", null, true);
        echo "</h2>
        <input role='yes' type='button' value='";
        // line 135
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "'/>
        <input role='no' type='button' value='";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "'/>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 136,  310 => 135,  306 => 134,  300 => 131,  297 => 130,  288 => 123,  279 => 119,  274 => 117,  271 => 116,  269 => 115,  263 => 112,  259 => 110,  252 => 106,  247 => 103,  245 => 102,  241 => 101,  238 => 100,  234 => 99,  227 => 95,  220 => 91,  214 => 88,  211 => 87,  204 => 83,  200 => 81,  198 => 80,  188 => 74,  186 => 73,  180 => 69,  171 => 66,  168 => 65,  164 => 64,  159 => 63,  155 => 62,  152 => 61,  146 => 57,  140 => 54,  135 => 52,  127 => 47,  118 => 41,  111 => 37,  100 => 30,  97 => 29,  91 => 27,  85 => 25,  83 => 24,  78 => 23,  75 => 22,  73 => 21,  69 => 20,  66 => 19,  61 => 17,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}

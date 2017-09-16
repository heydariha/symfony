<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e08b7a27b0eaac9f42a9d662fe970bc1efaf673f5b9da819910887c4fd10b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e08b7a27b0eaac9f42a9d662fe970bc1efaf673f5b9da819910887c4fd10b28->enter($__internal_2e08b7a27b0eaac9f42a9d662fe970bc1efaf673f5b9da819910887c4fd10b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0de2c9757469568e72237906c4fc9e6850c7cfca289442ec23c5a8ea794d7b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de2c9757469568e72237906c4fc9e6850c7cfca289442ec23c5a8ea794d7b9c->enter($__internal_0de2c9757469568e72237906c4fc9e6850c7cfca289442ec23c5a8ea794d7b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2e08b7a27b0eaac9f42a9d662fe970bc1efaf673f5b9da819910887c4fd10b28->leave($__internal_2e08b7a27b0eaac9f42a9d662fe970bc1efaf673f5b9da819910887c4fd10b28_prof);

        
        $__internal_0de2c9757469568e72237906c4fc9e6850c7cfca289442ec23c5a8ea794d7b9c->leave($__internal_0de2c9757469568e72237906c4fc9e6850c7cfca289442ec23c5a8ea794d7b9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_947a816692a73b505e136666cfa27121f455972831303249156863234c81aa87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947a816692a73b505e136666cfa27121f455972831303249156863234c81aa87->enter($__internal_947a816692a73b505e136666cfa27121f455972831303249156863234c81aa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b76c1759c9d6e6f5c6873d2960598cf1988a83093baace357bd15fb4254d0309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76c1759c9d6e6f5c6873d2960598cf1988a83093baace357bd15fb4254d0309->enter($__internal_b76c1759c9d6e6f5c6873d2960598cf1988a83093baace357bd15fb4254d0309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b76c1759c9d6e6f5c6873d2960598cf1988a83093baace357bd15fb4254d0309->leave($__internal_b76c1759c9d6e6f5c6873d2960598cf1988a83093baace357bd15fb4254d0309_prof);

        
        $__internal_947a816692a73b505e136666cfa27121f455972831303249156863234c81aa87->leave($__internal_947a816692a73b505e136666cfa27121f455972831303249156863234c81aa87_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6727677b1bfbd3ce7a05b23106c3da399f0cadb02c16c4b97f16e7eb672bfaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6727677b1bfbd3ce7a05b23106c3da399f0cadb02c16c4b97f16e7eb672bfaf->enter($__internal_d6727677b1bfbd3ce7a05b23106c3da399f0cadb02c16c4b97f16e7eb672bfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5df383f4767d8ca425afbfcc24b4883a387d939ea98bd011fe867d15b3726eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df383f4767d8ca425afbfcc24b4883a387d939ea98bd011fe867d15b3726eec->enter($__internal_5df383f4767d8ca425afbfcc24b4883a387d939ea98bd011fe867d15b3726eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5df383f4767d8ca425afbfcc24b4883a387d939ea98bd011fe867d15b3726eec->leave($__internal_5df383f4767d8ca425afbfcc24b4883a387d939ea98bd011fe867d15b3726eec_prof);

        
        $__internal_d6727677b1bfbd3ce7a05b23106c3da399f0cadb02c16c4b97f16e7eb672bfaf->leave($__internal_d6727677b1bfbd3ce7a05b23106c3da399f0cadb02c16c4b97f16e7eb672bfaf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_113beb4ae4f14b6b4f8a665bd362209a6d488fb0923d329b975b13fb7c94ad8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113beb4ae4f14b6b4f8a665bd362209a6d488fb0923d329b975b13fb7c94ad8c->enter($__internal_113beb4ae4f14b6b4f8a665bd362209a6d488fb0923d329b975b13fb7c94ad8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1618c2e53d30cc69289d9481a704e3f489229b799245df4b6adebed02b59290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1618c2e53d30cc69289d9481a704e3f489229b799245df4b6adebed02b59290->enter($__internal_f1618c2e53d30cc69289d9481a704e3f489229b799245df4b6adebed02b59290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1618c2e53d30cc69289d9481a704e3f489229b799245df4b6adebed02b59290->leave($__internal_f1618c2e53d30cc69289d9481a704e3f489229b799245df4b6adebed02b59290_prof);

        
        $__internal_113beb4ae4f14b6b4f8a665bd362209a6d488fb0923d329b975b13fb7c94ad8c->leave($__internal_113beb4ae4f14b6b4f8a665bd362209a6d488fb0923d329b975b13fb7c94ad8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

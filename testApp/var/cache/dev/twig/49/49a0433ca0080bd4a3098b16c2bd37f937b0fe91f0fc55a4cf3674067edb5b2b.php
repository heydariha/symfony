<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6f24b409d2a2a6c7bb543488586c56eb9e81738c2f54cfedf9f79eb8c708254b extends Twig_Template
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
        $__internal_d4dcab716c60cdd9670c4cecc3a3e03bd409cb5e1697a49c47284d4e347dbcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dcab716c60cdd9670c4cecc3a3e03bd409cb5e1697a49c47284d4e347dbcec->enter($__internal_d4dcab716c60cdd9670c4cecc3a3e03bd409cb5e1697a49c47284d4e347dbcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_0458993264f3ec1bd648ad3e35fa4898d89bdb4d9640eff0920a8bb30e0339a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0458993264f3ec1bd648ad3e35fa4898d89bdb4d9640eff0920a8bb30e0339a9->enter($__internal_0458993264f3ec1bd648ad3e35fa4898d89bdb4d9640eff0920a8bb30e0339a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_d4dcab716c60cdd9670c4cecc3a3e03bd409cb5e1697a49c47284d4e347dbcec->leave($__internal_d4dcab716c60cdd9670c4cecc3a3e03bd409cb5e1697a49c47284d4e347dbcec_prof);

        
        $__internal_0458993264f3ec1bd648ad3e35fa4898d89bdb4d9640eff0920a8bb30e0339a9->leave($__internal_0458993264f3ec1bd648ad3e35fa4898d89bdb4d9640eff0920a8bb30e0339a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49a08364eaab4e57f59c8bcb08f042916f2e6fc7ee69dc9bf8383b33c132e35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a08364eaab4e57f59c8bcb08f042916f2e6fc7ee69dc9bf8383b33c132e35d->enter($__internal_49a08364eaab4e57f59c8bcb08f042916f2e6fc7ee69dc9bf8383b33c132e35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf28f49f43d44f65a4295d59acb6b22e74f610dc2dc7e004c3fe605037b093f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf28f49f43d44f65a4295d59acb6b22e74f610dc2dc7e004c3fe605037b093f4->enter($__internal_cf28f49f43d44f65a4295d59acb6b22e74f610dc2dc7e004c3fe605037b093f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf28f49f43d44f65a4295d59acb6b22e74f610dc2dc7e004c3fe605037b093f4->leave($__internal_cf28f49f43d44f65a4295d59acb6b22e74f610dc2dc7e004c3fe605037b093f4_prof);

        
        $__internal_49a08364eaab4e57f59c8bcb08f042916f2e6fc7ee69dc9bf8383b33c132e35d->leave($__internal_49a08364eaab4e57f59c8bcb08f042916f2e6fc7ee69dc9bf8383b33c132e35d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_64d1c565138b501a8c86bbac6498029462055f25d64d93289dca6e5456a8f4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d1c565138b501a8c86bbac6498029462055f25d64d93289dca6e5456a8f4fd->enter($__internal_64d1c565138b501a8c86bbac6498029462055f25d64d93289dca6e5456a8f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a02eb879f301fc5bb1c5faaad7d958a1e72fe717d05d4212688838e85421190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a02eb879f301fc5bb1c5faaad7d958a1e72fe717d05d4212688838e85421190->enter($__internal_3a02eb879f301fc5bb1c5faaad7d958a1e72fe717d05d4212688838e85421190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3a02eb879f301fc5bb1c5faaad7d958a1e72fe717d05d4212688838e85421190->leave($__internal_3a02eb879f301fc5bb1c5faaad7d958a1e72fe717d05d4212688838e85421190_prof);

        
        $__internal_64d1c565138b501a8c86bbac6498029462055f25d64d93289dca6e5456a8f4fd->leave($__internal_64d1c565138b501a8c86bbac6498029462055f25d64d93289dca6e5456a8f4fd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcde0b25103ec767481f6a368378f9211d2125122671ee610dc34d5c55a2412c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcde0b25103ec767481f6a368378f9211d2125122671ee610dc34d5c55a2412c->enter($__internal_bcde0b25103ec767481f6a368378f9211d2125122671ee610dc34d5c55a2412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48644b0513b542c16dd8c38ff68d53e94fd56652bcea2d51494ffb67fb34a340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48644b0513b542c16dd8c38ff68d53e94fd56652bcea2d51494ffb67fb34a340->enter($__internal_48644b0513b542c16dd8c38ff68d53e94fd56652bcea2d51494ffb67fb34a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48644b0513b542c16dd8c38ff68d53e94fd56652bcea2d51494ffb67fb34a340->leave($__internal_48644b0513b542c16dd8c38ff68d53e94fd56652bcea2d51494ffb67fb34a340_prof);

        
        $__internal_bcde0b25103ec767481f6a368378f9211d2125122671ee610dc34d5c55a2412c->leave($__internal_bcde0b25103ec767481f6a368378f9211d2125122671ee610dc34d5c55a2412c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}

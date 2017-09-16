<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa977d0ad67bdbb902fdebfe5a459ab19535a1653b92870458674f655005850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa977d0ad67bdbb902fdebfe5a459ab19535a1653b92870458674f655005850->enter($__internal_9fa977d0ad67bdbb902fdebfe5a459ab19535a1653b92870458674f655005850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d7bc3d0657a1ca144fc1a4b4b81ba9ab98946e7a234b34a107dea107ea5d429a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bc3d0657a1ca144fc1a4b4b81ba9ab98946e7a234b34a107dea107ea5d429a->enter($__internal_d7bc3d0657a1ca144fc1a4b4b81ba9ab98946e7a234b34a107dea107ea5d429a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9fa977d0ad67bdbb902fdebfe5a459ab19535a1653b92870458674f655005850->leave($__internal_9fa977d0ad67bdbb902fdebfe5a459ab19535a1653b92870458674f655005850_prof);

        
        $__internal_d7bc3d0657a1ca144fc1a4b4b81ba9ab98946e7a234b34a107dea107ea5d429a->leave($__internal_d7bc3d0657a1ca144fc1a4b4b81ba9ab98946e7a234b34a107dea107ea5d429a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1db5062e9112d6a009fb3c0d5c28871b5038d43e4630ecc4cb61c0cda2ee4af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db5062e9112d6a009fb3c0d5c28871b5038d43e4630ecc4cb61c0cda2ee4af3->enter($__internal_1db5062e9112d6a009fb3c0d5c28871b5038d43e4630ecc4cb61c0cda2ee4af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77111fdc7e275f8e5d4a145fba235b76da11b0fe57a3dea0256ace12eb81b99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77111fdc7e275f8e5d4a145fba235b76da11b0fe57a3dea0256ace12eb81b99c->enter($__internal_77111fdc7e275f8e5d4a145fba235b76da11b0fe57a3dea0256ace12eb81b99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77111fdc7e275f8e5d4a145fba235b76da11b0fe57a3dea0256ace12eb81b99c->leave($__internal_77111fdc7e275f8e5d4a145fba235b76da11b0fe57a3dea0256ace12eb81b99c_prof);

        
        $__internal_1db5062e9112d6a009fb3c0d5c28871b5038d43e4630ecc4cb61c0cda2ee4af3->leave($__internal_1db5062e9112d6a009fb3c0d5c28871b5038d43e4630ecc4cb61c0cda2ee4af3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc9b8b1b439f521bae235c270c8a98a5d0106e87637f666769e400f8d32c5eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9b8b1b439f521bae235c270c8a98a5d0106e87637f666769e400f8d32c5eed->enter($__internal_cc9b8b1b439f521bae235c270c8a98a5d0106e87637f666769e400f8d32c5eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07c55ce4c1ac96dda3ed3f6c9c402c100e0582e55ca3f1b563dd528d617475a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c55ce4c1ac96dda3ed3f6c9c402c100e0582e55ca3f1b563dd528d617475a3->enter($__internal_07c55ce4c1ac96dda3ed3f6c9c402c100e0582e55ca3f1b563dd528d617475a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07c55ce4c1ac96dda3ed3f6c9c402c100e0582e55ca3f1b563dd528d617475a3->leave($__internal_07c55ce4c1ac96dda3ed3f6c9c402c100e0582e55ca3f1b563dd528d617475a3_prof);

        
        $__internal_cc9b8b1b439f521bae235c270c8a98a5d0106e87637f666769e400f8d32c5eed->leave($__internal_cc9b8b1b439f521bae235c270c8a98a5d0106e87637f666769e400f8d32c5eed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c32c572bfe73e5955c031106413f5581743dedc600004e0a53940b3b0616c776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32c572bfe73e5955c031106413f5581743dedc600004e0a53940b3b0616c776->enter($__internal_c32c572bfe73e5955c031106413f5581743dedc600004e0a53940b3b0616c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_299c9920cd012350a78010616cc2bcce05783c611a98e6a6e48046e9bb67d73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299c9920cd012350a78010616cc2bcce05783c611a98e6a6e48046e9bb67d73f->enter($__internal_299c9920cd012350a78010616cc2bcce05783c611a98e6a6e48046e9bb67d73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_299c9920cd012350a78010616cc2bcce05783c611a98e6a6e48046e9bb67d73f->leave($__internal_299c9920cd012350a78010616cc2bcce05783c611a98e6a6e48046e9bb67d73f_prof);

        
        $__internal_c32c572bfe73e5955c031106413f5581743dedc600004e0a53940b3b0616c776->leave($__internal_c32c572bfe73e5955c031106413f5581743dedc600004e0a53940b3b0616c776_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff157610e15067cf8935870152e694f67619d501a2d7d28e8e5d8a3cae7394d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff157610e15067cf8935870152e694f67619d501a2d7d28e8e5d8a3cae7394d3->enter($__internal_ff157610e15067cf8935870152e694f67619d501a2d7d28e8e5d8a3cae7394d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a752e2541aa84b53e2d1557af8350b96bff766fffdd4c711605037bccac0a907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a752e2541aa84b53e2d1557af8350b96bff766fffdd4c711605037bccac0a907->enter($__internal_a752e2541aa84b53e2d1557af8350b96bff766fffdd4c711605037bccac0a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a752e2541aa84b53e2d1557af8350b96bff766fffdd4c711605037bccac0a907->leave($__internal_a752e2541aa84b53e2d1557af8350b96bff766fffdd4c711605037bccac0a907_prof);

        
        $__internal_ff157610e15067cf8935870152e694f67619d501a2d7d28e8e5d8a3cae7394d3->leave($__internal_ff157610e15067cf8935870152e694f67619d501a2d7d28e8e5d8a3cae7394d3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\app/Resources\\views/base.html.twig");
    }
}

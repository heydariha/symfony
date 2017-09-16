<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
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
        $__internal_fae1215dc44be0ab6cff4aacf5a2184a1b0946e7f968fe6c70eb5276c868fb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae1215dc44be0ab6cff4aacf5a2184a1b0946e7f968fe6c70eb5276c868fb61->enter($__internal_fae1215dc44be0ab6cff4aacf5a2184a1b0946e7f968fe6c70eb5276c868fb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7705d6ab9a082c9859a859410145bb3d1becd1bc758e3d465dd6d55c5fc39d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7705d6ab9a082c9859a859410145bb3d1becd1bc758e3d465dd6d55c5fc39d89->enter($__internal_7705d6ab9a082c9859a859410145bb3d1becd1bc758e3d465dd6d55c5fc39d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fae1215dc44be0ab6cff4aacf5a2184a1b0946e7f968fe6c70eb5276c868fb61->leave($__internal_fae1215dc44be0ab6cff4aacf5a2184a1b0946e7f968fe6c70eb5276c868fb61_prof);

        
        $__internal_7705d6ab9a082c9859a859410145bb3d1becd1bc758e3d465dd6d55c5fc39d89->leave($__internal_7705d6ab9a082c9859a859410145bb3d1becd1bc758e3d465dd6d55c5fc39d89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97214875fec050da3a5cf4065b3454e684bc770da9f7515738ac7b5e5347cf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97214875fec050da3a5cf4065b3454e684bc770da9f7515738ac7b5e5347cf4a->enter($__internal_97214875fec050da3a5cf4065b3454e684bc770da9f7515738ac7b5e5347cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ecc73b6570ed7294aff47f0948b83b1484a81164d482a674e7af32f913ae520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecc73b6570ed7294aff47f0948b83b1484a81164d482a674e7af32f913ae520->enter($__internal_7ecc73b6570ed7294aff47f0948b83b1484a81164d482a674e7af32f913ae520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7ecc73b6570ed7294aff47f0948b83b1484a81164d482a674e7af32f913ae520->leave($__internal_7ecc73b6570ed7294aff47f0948b83b1484a81164d482a674e7af32f913ae520_prof);

        
        $__internal_97214875fec050da3a5cf4065b3454e684bc770da9f7515738ac7b5e5347cf4a->leave($__internal_97214875fec050da3a5cf4065b3454e684bc770da9f7515738ac7b5e5347cf4a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b77b51f7f96b955f1ff5f1dded0b88264c98461df175f6cf0e1c69c1b8052468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77b51f7f96b955f1ff5f1dded0b88264c98461df175f6cf0e1c69c1b8052468->enter($__internal_b77b51f7f96b955f1ff5f1dded0b88264c98461df175f6cf0e1c69c1b8052468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24ba5085ce50752c49559d897df7635fd18e730fceaaaa88af8ce9e48a05de2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ba5085ce50752c49559d897df7635fd18e730fceaaaa88af8ce9e48a05de2e->enter($__internal_24ba5085ce50752c49559d897df7635fd18e730fceaaaa88af8ce9e48a05de2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24ba5085ce50752c49559d897df7635fd18e730fceaaaa88af8ce9e48a05de2e->leave($__internal_24ba5085ce50752c49559d897df7635fd18e730fceaaaa88af8ce9e48a05de2e_prof);

        
        $__internal_b77b51f7f96b955f1ff5f1dded0b88264c98461df175f6cf0e1c69c1b8052468->leave($__internal_b77b51f7f96b955f1ff5f1dded0b88264c98461df175f6cf0e1c69c1b8052468_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e3df624e5b21bb33ac31c5b4d81e3d103c876e4cb8196859b2a57c851e20377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3df624e5b21bb33ac31c5b4d81e3d103c876e4cb8196859b2a57c851e20377->enter($__internal_6e3df624e5b21bb33ac31c5b4d81e3d103c876e4cb8196859b2a57c851e20377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e05fc84fb5fb7ee9eefdbc43246fe2561e5d9f6500e0983fc2f875ec014f4657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05fc84fb5fb7ee9eefdbc43246fe2561e5d9f6500e0983fc2f875ec014f4657->enter($__internal_e05fc84fb5fb7ee9eefdbc43246fe2561e5d9f6500e0983fc2f875ec014f4657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e05fc84fb5fb7ee9eefdbc43246fe2561e5d9f6500e0983fc2f875ec014f4657->leave($__internal_e05fc84fb5fb7ee9eefdbc43246fe2561e5d9f6500e0983fc2f875ec014f4657_prof);

        
        $__internal_6e3df624e5b21bb33ac31c5b4d81e3d103c876e4cb8196859b2a57c851e20377->leave($__internal_6e3df624e5b21bb33ac31c5b4d81e3d103c876e4cb8196859b2a57c851e20377_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a3169dedb9be4665882c62124cd42afab0a5d9bea0b5196527357d8104c4ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3169dedb9be4665882c62124cd42afab0a5d9bea0b5196527357d8104c4ef0->enter($__internal_3a3169dedb9be4665882c62124cd42afab0a5d9bea0b5196527357d8104c4ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c0855b0d7f281858fa2eeff7e872b81f3108fb83cf8f4dce7e5f97f469f894c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0855b0d7f281858fa2eeff7e872b81f3108fb83cf8f4dce7e5f97f469f894c4->enter($__internal_c0855b0d7f281858fa2eeff7e872b81f3108fb83cf8f4dce7e5f97f469f894c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0855b0d7f281858fa2eeff7e872b81f3108fb83cf8f4dce7e5f97f469f894c4->leave($__internal_c0855b0d7f281858fa2eeff7e872b81f3108fb83cf8f4dce7e5f97f469f894c4_prof);

        
        $__internal_3a3169dedb9be4665882c62124cd42afab0a5d9bea0b5196527357d8104c4ef0->leave($__internal_3a3169dedb9be4665882c62124cd42afab0a5d9bea0b5196527357d8104c4ef0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\app\\Resources\\views\\base.html.twig");
    }
}

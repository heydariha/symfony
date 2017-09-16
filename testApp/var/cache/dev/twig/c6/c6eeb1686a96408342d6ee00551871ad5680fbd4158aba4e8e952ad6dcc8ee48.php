<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_90784263706ccb0d5e5d97ab31ddaa0342fa64a83aa6f3878240b141aadd7566 extends Twig_Template
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
        $__internal_b2528e2fd5baa71229984d227fad5d570d61c70f176c958293f8ca49e91ce668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2528e2fd5baa71229984d227fad5d570d61c70f176c958293f8ca49e91ce668->enter($__internal_b2528e2fd5baa71229984d227fad5d570d61c70f176c958293f8ca49e91ce668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b74a67655655869e071f9c124f5f9d3f3aec3d073c98698a7f48b434e682110f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74a67655655869e071f9c124f5f9d3f3aec3d073c98698a7f48b434e682110f->enter($__internal_b74a67655655869e071f9c124f5f9d3f3aec3d073c98698a7f48b434e682110f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b2528e2fd5baa71229984d227fad5d570d61c70f176c958293f8ca49e91ce668->leave($__internal_b2528e2fd5baa71229984d227fad5d570d61c70f176c958293f8ca49e91ce668_prof);

        
        $__internal_b74a67655655869e071f9c124f5f9d3f3aec3d073c98698a7f48b434e682110f->leave($__internal_b74a67655655869e071f9c124f5f9d3f3aec3d073c98698a7f48b434e682110f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

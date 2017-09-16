<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8e056758bbf498e36dc394e54ea3c1c9621998f54a210fc676ea4fce2635ce03 extends Twig_Template
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
        $__internal_d602ba5f74670d2c3a8c20833ce88864c7e4d033bae996f9b4eaa294f845651c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d602ba5f74670d2c3a8c20833ce88864c7e4d033bae996f9b4eaa294f845651c->enter($__internal_d602ba5f74670d2c3a8c20833ce88864c7e4d033bae996f9b4eaa294f845651c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e2cddb0a23c4a6529b7f751d6562a94ebd51d13563f2772c7dceaa18eed15e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cddb0a23c4a6529b7f751d6562a94ebd51d13563f2772c7dceaa18eed15e06->enter($__internal_e2cddb0a23c4a6529b7f751d6562a94ebd51d13563f2772c7dceaa18eed15e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d602ba5f74670d2c3a8c20833ce88864c7e4d033bae996f9b4eaa294f845651c->leave($__internal_d602ba5f74670d2c3a8c20833ce88864c7e4d033bae996f9b4eaa294f845651c_prof);

        
        $__internal_e2cddb0a23c4a6529b7f751d6562a94ebd51d13563f2772c7dceaa18eed15e06->leave($__internal_e2cddb0a23c4a6529b7f751d6562a94ebd51d13563f2772c7dceaa18eed15e06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

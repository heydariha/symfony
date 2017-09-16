<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8c37657f0cb6e9e86578da9b539773576896016ed545a57263743211646ea8f8 extends Twig_Template
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
        $__internal_a87cb3a48b46377f86e5f5bceaa5984ad43c4016fb68493d27000137e7fd9cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87cb3a48b46377f86e5f5bceaa5984ad43c4016fb68493d27000137e7fd9cea->enter($__internal_a87cb3a48b46377f86e5f5bceaa5984ad43c4016fb68493d27000137e7fd9cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b4d35e3619a9d94e44de0b486112ee93351c81328ac739dba13d8058f30723bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d35e3619a9d94e44de0b486112ee93351c81328ac739dba13d8058f30723bf->enter($__internal_b4d35e3619a9d94e44de0b486112ee93351c81328ac739dba13d8058f30723bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a87cb3a48b46377f86e5f5bceaa5984ad43c4016fb68493d27000137e7fd9cea->leave($__internal_a87cb3a48b46377f86e5f5bceaa5984ad43c4016fb68493d27000137e7fd9cea_prof);

        
        $__internal_b4d35e3619a9d94e44de0b486112ee93351c81328ac739dba13d8058f30723bf->leave($__internal_b4d35e3619a9d94e44de0b486112ee93351c81328ac739dba13d8058f30723bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

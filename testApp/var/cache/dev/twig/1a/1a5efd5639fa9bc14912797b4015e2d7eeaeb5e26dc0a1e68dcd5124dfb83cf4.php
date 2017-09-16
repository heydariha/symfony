<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_42b242e64ca85e830393a8cb59b29dc060699f5b68fa1e61b95ce086abc6c4ab extends Twig_Template
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
        $__internal_e06b52eea6f15e8f138fad0fe114ba9c4cd9d2b28f6a89da61de1380bd42a941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06b52eea6f15e8f138fad0fe114ba9c4cd9d2b28f6a89da61de1380bd42a941->enter($__internal_e06b52eea6f15e8f138fad0fe114ba9c4cd9d2b28f6a89da61de1380bd42a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5e153f85471928f634b26cac044c2ed7bb345abb1bb04474e11d1cda9eb2a972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e153f85471928f634b26cac044c2ed7bb345abb1bb04474e11d1cda9eb2a972->enter($__internal_5e153f85471928f634b26cac044c2ed7bb345abb1bb04474e11d1cda9eb2a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e06b52eea6f15e8f138fad0fe114ba9c4cd9d2b28f6a89da61de1380bd42a941->leave($__internal_e06b52eea6f15e8f138fad0fe114ba9c4cd9d2b28f6a89da61de1380bd42a941_prof);

        
        $__internal_5e153f85471928f634b26cac044c2ed7bb345abb1bb04474e11d1cda9eb2a972->leave($__internal_5e153f85471928f634b26cac044c2ed7bb345abb1bb04474e11d1cda9eb2a972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

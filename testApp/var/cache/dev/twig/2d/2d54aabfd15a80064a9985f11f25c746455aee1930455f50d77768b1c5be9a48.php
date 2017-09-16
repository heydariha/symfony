<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_298099f2a6a23a708603ea8659d2eeab437efdd8c90fd17f899b84254ff8f550 extends Twig_Template
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
        $__internal_040534ce690614ef3c76b3fca2438165243ecee1c03067296138809b2a812d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040534ce690614ef3c76b3fca2438165243ecee1c03067296138809b2a812d76->enter($__internal_040534ce690614ef3c76b3fca2438165243ecee1c03067296138809b2a812d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_31b59cea2bffaee4d39198196ba45f703b215bb3ed0b9cb5626bc38020aaf93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b59cea2bffaee4d39198196ba45f703b215bb3ed0b9cb5626bc38020aaf93e->enter($__internal_31b59cea2bffaee4d39198196ba45f703b215bb3ed0b9cb5626bc38020aaf93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_040534ce690614ef3c76b3fca2438165243ecee1c03067296138809b2a812d76->leave($__internal_040534ce690614ef3c76b3fca2438165243ecee1c03067296138809b2a812d76_prof);

        
        $__internal_31b59cea2bffaee4d39198196ba45f703b215bb3ed0b9cb5626bc38020aaf93e->leave($__internal_31b59cea2bffaee4d39198196ba45f703b215bb3ed0b9cb5626bc38020aaf93e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

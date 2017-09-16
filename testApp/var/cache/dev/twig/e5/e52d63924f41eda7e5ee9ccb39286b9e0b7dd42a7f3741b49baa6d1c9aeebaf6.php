<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a7ca0dc7093b4805cf2a334ee2112fd447b05b8233603438a6f4b338e74f3eb7 extends Twig_Template
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
        $__internal_f2b169134be17b29a68f46fa944adefe7d9f13c4e399bbc3a874079a81a66891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b169134be17b29a68f46fa944adefe7d9f13c4e399bbc3a874079a81a66891->enter($__internal_f2b169134be17b29a68f46fa944adefe7d9f13c4e399bbc3a874079a81a66891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_db743489568aa83517d5fb9d3615dab0c0f1340a9d80f8a63a6ebb01ab59db72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db743489568aa83517d5fb9d3615dab0c0f1340a9d80f8a63a6ebb01ab59db72->enter($__internal_db743489568aa83517d5fb9d3615dab0c0f1340a9d80f8a63a6ebb01ab59db72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f2b169134be17b29a68f46fa944adefe7d9f13c4e399bbc3a874079a81a66891->leave($__internal_f2b169134be17b29a68f46fa944adefe7d9f13c4e399bbc3a874079a81a66891_prof);

        
        $__internal_db743489568aa83517d5fb9d3615dab0c0f1340a9d80f8a63a6ebb01ab59db72->leave($__internal_db743489568aa83517d5fb9d3615dab0c0f1340a9d80f8a63a6ebb01ab59db72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

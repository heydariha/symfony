<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_28b68d99d7b21fa81c8dfffcc170db1832250f1fe75792b54c460e3e8840b646 extends Twig_Template
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
        $__internal_f1c4d178f203957c98585f7a4e2189bcdd3c073d7ac685d596b62ebc6b0707ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c4d178f203957c98585f7a4e2189bcdd3c073d7ac685d596b62ebc6b0707ac->enter($__internal_f1c4d178f203957c98585f7a4e2189bcdd3c073d7ac685d596b62ebc6b0707ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a881f3805d21f191edd3cdcc2eca3cf83540f1628115157058ec08c43096943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a881f3805d21f191edd3cdcc2eca3cf83540f1628115157058ec08c43096943d->enter($__internal_a881f3805d21f191edd3cdcc2eca3cf83540f1628115157058ec08c43096943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f1c4d178f203957c98585f7a4e2189bcdd3c073d7ac685d596b62ebc6b0707ac->leave($__internal_f1c4d178f203957c98585f7a4e2189bcdd3c073d7ac685d596b62ebc6b0707ac_prof);

        
        $__internal_a881f3805d21f191edd3cdcc2eca3cf83540f1628115157058ec08c43096943d->leave($__internal_a881f3805d21f191edd3cdcc2eca3cf83540f1628115157058ec08c43096943d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a43b1e1d79520b2d8dce5ac40d507c5d7c2b0412edb5744936fb2a9a6cd4630c extends Twig_Template
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
        $__internal_14d6419c42f0d74d92b8b2942a88ed5b6d20aca0a085dff5570d3d050ce1a627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d6419c42f0d74d92b8b2942a88ed5b6d20aca0a085dff5570d3d050ce1a627->enter($__internal_14d6419c42f0d74d92b8b2942a88ed5b6d20aca0a085dff5570d3d050ce1a627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c8d61a3a6677dec1697a1a0af76e4873da0f7593754a0712aa77564f92f08704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d61a3a6677dec1697a1a0af76e4873da0f7593754a0712aa77564f92f08704->enter($__internal_c8d61a3a6677dec1697a1a0af76e4873da0f7593754a0712aa77564f92f08704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_14d6419c42f0d74d92b8b2942a88ed5b6d20aca0a085dff5570d3d050ce1a627->leave($__internal_14d6419c42f0d74d92b8b2942a88ed5b6d20aca0a085dff5570d3d050ce1a627_prof);

        
        $__internal_c8d61a3a6677dec1697a1a0af76e4873da0f7593754a0712aa77564f92f08704->leave($__internal_c8d61a3a6677dec1697a1a0af76e4873da0f7593754a0712aa77564f92f08704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

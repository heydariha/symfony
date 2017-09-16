<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3923a7537312516cb310f1a7d214d44c6014a936891830598ce845e7ef541f58 extends Twig_Template
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
        $__internal_93612e66e1206c925e717c1f8c0941030fce30bd60118f0f48a6cc568b73c42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93612e66e1206c925e717c1f8c0941030fce30bd60118f0f48a6cc568b73c42b->enter($__internal_93612e66e1206c925e717c1f8c0941030fce30bd60118f0f48a6cc568b73c42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_978c8159d4a3bcf257f9acff9cc1f737fbd8e1ddd23ae5f49125a37eb1b5791d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978c8159d4a3bcf257f9acff9cc1f737fbd8e1ddd23ae5f49125a37eb1b5791d->enter($__internal_978c8159d4a3bcf257f9acff9cc1f737fbd8e1ddd23ae5f49125a37eb1b5791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_93612e66e1206c925e717c1f8c0941030fce30bd60118f0f48a6cc568b73c42b->leave($__internal_93612e66e1206c925e717c1f8c0941030fce30bd60118f0f48a6cc568b73c42b_prof);

        
        $__internal_978c8159d4a3bcf257f9acff9cc1f737fbd8e1ddd23ae5f49125a37eb1b5791d->leave($__internal_978c8159d4a3bcf257f9acff9cc1f737fbd8e1ddd23ae5f49125a37eb1b5791d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}

<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8b3df9dc319cda5b9dfadf5cb5bb78e3fb5aa255c3e6541adbfc1af525504c81 extends Twig_Template
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
        $__internal_9b0828c833493330364223c695d1d610a4f063163383444ba75d011187445fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0828c833493330364223c695d1d610a4f063163383444ba75d011187445fe8->enter($__internal_9b0828c833493330364223c695d1d610a4f063163383444ba75d011187445fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5c375e81dbb6c39e97f7a1bd52ec58e8c95e443b29603076f6db6c2006b590ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c375e81dbb6c39e97f7a1bd52ec58e8c95e443b29603076f6db6c2006b590ac->enter($__internal_5c375e81dbb6c39e97f7a1bd52ec58e8c95e443b29603076f6db6c2006b590ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9b0828c833493330364223c695d1d610a4f063163383444ba75d011187445fe8->leave($__internal_9b0828c833493330364223c695d1d610a4f063163383444ba75d011187445fe8_prof);

        
        $__internal_5c375e81dbb6c39e97f7a1bd52ec58e8c95e443b29603076f6db6c2006b590ac->leave($__internal_5c375e81dbb6c39e97f7a1bd52ec58e8c95e443b29603076f6db6c2006b590ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

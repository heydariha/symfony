<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_faaa3555ecaf67f6dd1294fc0d8a1e433c6bbed3e258bbb9cb32923a44c170c9 extends Twig_Template
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
        $__internal_3dca0933cfb16cf3d4f74fc7f84f16cd4508a10865f85992a4227c0d29553562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dca0933cfb16cf3d4f74fc7f84f16cd4508a10865f85992a4227c0d29553562->enter($__internal_3dca0933cfb16cf3d4f74fc7f84f16cd4508a10865f85992a4227c0d29553562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ed16478c9aebfc52bcbfe73a6e9efeca64b1d2be497667073feac0a0c4444193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed16478c9aebfc52bcbfe73a6e9efeca64b1d2be497667073feac0a0c4444193->enter($__internal_ed16478c9aebfc52bcbfe73a6e9efeca64b1d2be497667073feac0a0c4444193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3dca0933cfb16cf3d4f74fc7f84f16cd4508a10865f85992a4227c0d29553562->leave($__internal_3dca0933cfb16cf3d4f74fc7f84f16cd4508a10865f85992a4227c0d29553562_prof);

        
        $__internal_ed16478c9aebfc52bcbfe73a6e9efeca64b1d2be497667073feac0a0c4444193->leave($__internal_ed16478c9aebfc52bcbfe73a6e9efeca64b1d2be497667073feac0a0c4444193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

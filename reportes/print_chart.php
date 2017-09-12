<?php
    require_once '../comun/lib/dompdf/dompdf_config.inc.php';

$html = 'andres<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABNwAAADICAYAAAAzxPyOAAAgAElEQVR4Xu3dB5QUVfr+8deMgKIIKnhUkhFQcTCLrok1rAHDYlqziIIRxEEJYg6ooK64iDmBARVdVNQ1Z1jFnEDUVczIgggCO7/z3L/Fv2l6ZmqGqq5wv33Ont2F6hs+bzXd/fS9VctUVVVVGQ8EEEAAAQQQQAABBBBAAAEEEEAAAQQQiERgGQK3SBxpBAEEEEAAAQQQQAABBBBAAAEEEEAAASdA4MaJgAACCCCAAAIIIIAAAggggAACCCCAQIQCBG4RYtIUAggggAACCCCAAAIIIIAAAggggAACBG6cAwgggAACCCCAAAIIIIAAAggggAACCEQoQOAWISZNIYAAAggggAACCCCAAAIIIIAAAgggQODGOYAAAggggAACCCCAAAIIIIAAAggggECEAgRuEWLSFAIIIIAAAggggAACCCCAAAIIIIAAAgRunAMIIIAAAggggAACCCCAAAIIIIAAAghEKEDgFiEmTSGAAAIIIIAAAggggAACCCCAAAIIIEDgxjmAAAIIIIAAAggggAACCCCAAAIIIIBAhAIEbhFi0hQCCCCAAAIIIIAAAggggAACCCCAAAIEbpwDCCCAAAIIIIAAAggggAACCCCAAAIIRChA4BYhZlqb+umnn+yII46wJ598crEh7rbbblZZWWm77rqrLbvssmUZ/oUXXmiDBg2yl156yXbYYQebPn263X777XbwwQdbu3btYhnDa6+9Zv369bMXX3zR9t9/fxs1apQ1a9ZsUV933323HXnkkYv13bRpUzvooINs4MCBtu6668YyrqAualxjWGONNWLpp6ZGg3romKuvvtrOPPNMd/isWbOsV69eduedd7r/H9SrtgHWtZ6B/V133eXO0aV5lMszsNl9993tqKOOWpohV/vcGTNm2EknnWTffPONyaZVq1aLjp03b57ddtttds0119gPP/xgPXv2tD59+pjOWR4IIIAAAggggAACCCCAAALpECBwS0cdYh1FdYGbOl1llVXsxhtvtMMOO8yWWWaZWMdR3Phvv/3mAh4FYmPGjLGNNtoo8v4XLlzoQrPHHnvM7rnnHuvQocMSfZQK3IKDDjnkEPvHP/5hq6++euRjS0ODhYHb3/72N/v73//uzomPP/7YunfvbpMnT3bDDBO41aee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Zs+ebRUVFda3b19r2rRpykbKcBBAAAEEEEAAAQQQQAABBBBAAAEESgkQuHFeIIAAAggggAACCCCAAAIIIIAAAgggEKEAgVuEmDSFAAIIIIAAAggggAACCCCAAAIIIIAAgRvnAAIIIIAAAggggAACCCCAAAIIIIAAAhEKELhFiElTCCCAAAIIIIAAAggggAACCCCAAAIIELhxDiCAAAIIIIAAAggggAACCCCAAAIIIBChAIFbhJg0hQACCCCAAAIIIIAAAggggEB1Av/73//shx9+sLXWWgskBBDIuQCBW84LzPSyIfDVV1/ZjTfeaI8//rjNnDnTOnToYGeddZZ16dLFll122WxMglEigECdBX755Re79dZbbcyYMe7Dd+vWre3www+3Qw891Bo2bGgzZsywE044wfr162fbbLONXXHFFa4P/X8eCCCQTYE5c+bY6NGj7cEHH7SPPvrImjRpYjvuuKP17NnTNt1001CT+uyzz9y/A/o3oV27dks8h38rQjFyEAK1Cvz222927rnn2rhx4xY7Vu/XvXr1sv3228+WW265Or0/P/TQQ/bpp58uei/n9VprGTgAgcwKELhltnQMPC8Cr7zyig0ZMsQqKyttp512smWWWcYmT55sF198sfvSfdBBB7k/44EAAvkS0If4888/39q3b28HH3ywC9h+/vlnu+6662z+/Pk2aNAgW3HFFRebNB/K83UOMBv/BL7//nv3g9q2225rRx55pK222mo2d+5cmzBhgg0dOtSGDx9unTp1qhWGwK1WIg5AIBKBIHDTZ3L98BU8pk2b5j67H3XUUbb33nvXKXC7//777fPPP+fHs0gqRCMIpFuAwC3d9WF0ORfQ6pYzzzzTjj32WBe2FT4UxN1yyy3uDbxp06amY/VF/N5777UGDRpYjx497JhjjnH/Wx+8FdDttddedu2115p+PS/8e72xv/fee+5X9FGjRlmrVq3chwStoFOYt3DhQvfL3VVXXeVW2eyyyy529tlnW9u2bd0KG4UC+tVdXwS6d+9u5513ni2//PI5rw7TQyBegeq+MOvP9fq88sor3ZfxUivcdt99d/fvwTXXXOOO0UMrZS666CL3Om7WrBmv6XjLR+sI1FlA77V6H9V2Mr33a1VM8KiqqrI777zTvvzyS7eaRqvbv/76a7vkkkvs6aeftubNm1ufPn0WraYp/vdD7/GXXXaZvfnmm3bAAQe40H7ttdfmC32dq8QTEFhcoLrATUfddtttphA9WG2qP9P/Voh+++23uxXs+lyt168+6x999NH26KOPuvd4PbQ6Tq9xvZ8Hz9Xnfv0ApxVwTzzxhPssfsEFF1jnzp2XWPWu5+gzvr4zqB39m6HvA2r3pptuMoWCJ554ovt+oM8H+vdhzz33dD/orbHGGpQaAQTKIEDgVgZkukCgOoGJEyfa9ddf70KyVVddtVoovdkPHjzYfXg+5ZRT3Bv5hRde6IIz/X/9SnbcccfZVlttZQMHDrQFCxa4v99kk03spJNOsgceeMAGDBjgVtJpxZw+mOvNVm/gW2yxhdvW8tJLL7ljFO7pw72COX0xUKCnL/z6Nf7UU091XxT0QYAHAggsnYBWs2kL2fbbb29HHHGE+0Be/KhuS6lek71797a+ffvalltu6Z5211132ZQpU1wg/vDDD/OaXrry8GwEIhf47rvv7PTTT3fvv6W2jiqQ049gCtt++ukntxJOX5QPOeQQmz59uvuSrvfwbt26uR/agi/5Wgl7xhlnuLa1NVXv5wr0tCKH7eeRl5EGPROoT+CmsEs/gulzd6NGjezFF19079c33HCDC86KV7gVrl7X/9aKV/3ottlmm7nP6OPHj3ffFfRvROGPcKUCN30fUOiu7wcK8PU9YL311nOB/CqrrOICfX1u0I/2PBBAIH4BArf4jekBgWoFCn+VWnnllas97u233170C1hwgdUPPvjAhWvDhg2zefPmuQ/XenPeeOONXTv//ve/3Rv71VdfbU8++aQ9++yzbruKwjL9kq6/0wd7bWnRB/LTTjtt0RcAvaHrl7Ctt97aBW16c9cv6woGeCCAQHQCCr+DX53XXXddt7pUvz7rA7lWv1QXuGkFqlay6d8NfajWFwJ9mNcX84qKCl7T0ZWIlhCITEAh2aWXXurei1dfffUa29U1XbUSJnjf1sF6H9eKGq2GKVxV8+6775p+wNNq9BVWWMF9Kde/K/r3gcAtsvLRkKcCpQI3/fisQE3huYJxfT6u6ZIPxe/ltQVuav+cc85xn9MLw3WtSqstcNNnAX0f2GCDDdxnAwVsGp8+H+ih60cqiOPfBk9PaKZddgECt7KT0yEC/19AF0194YUXXJhWU+CmD976tavwOL156021f//+rsHiD/GFb9BvvfXWEteKCMI+vXGffPLJbhl68UOB3v7777/Emzs1RACB6AQUgOvLs0Jyvc4VkOt6MFqBqjC9upsmvP766y4410rUb7/91v2SrgB+1qxZbsUrr+noakRLCEQhUCpw0+tYN0oJHlp1rhXmunzE7NmzF/tSXPh8rYALVriNHTvWPb3wC3ThVrcoxk4bCPgqUN1NE3SDM31+7tq1q1uVWhi46X39m2++sVdffdUFc9rKqf++44473HXgagvcCl/PdQ3cCm+mUios5Ppxvp7JzDspAQK3pOTpFwEz08o1bSnVKrTiLaX6hfrjjz9220aff/75egVuwXWg9Mt38cVZ9YarD/rHH3+824JW3Z3Oin+Vo3AIIBCvwH/+8x/3IV6/muvLd3WBm7akBttK33nnHfviiy/ctvDgtc5rOt460ToCdRXQllK9rrUSTatPih96T9brNorAjVUsda0OxyNQWqCmLaWFzygM3PSDun4M22effWy77bZzl4QJfiQncONMQ8AvAQI3v+rNbFMmUNNNE95//323VF0XRdcX6+CiqtVtKS38RUvTLN5SGlxQVSvpCreU6hovuo6UvrgX37hB7RC4peykYTi5EahuhWvw4V6/mgdbuvX61of04l/Qta1UF0fXhZH1WtaW1ODacLymc3OqMJGcCOiHtMsvv9xd2kHXRC28aYKmWBi4vfbaa3XaUqrnalWsrufGltKcnDBMIxUCdQ3cevXq5YJ13SAhuBSLwnb9eKYfxaIO3LSadfLkyYtumsAKt1ScNgwCgUUCBG6cDAgkLKAgTFvB9AapwEsfwPXGqbsM/fnPf3Zv0LpJQpibJmgbmq7FpruU6votO++8s7u4slazacupLpi62267mVbD6PoOurFCmzZt3J3RHnvsMfdlfv3113crZNSfvrBvuOGGbClN+Byh+3wKaBupPpQrVNO1FHW3UYVnummJLpKsL+baplLdCrfgC7ruQNayZUt3RzJdBy642yGv6XyeN8wq2wJ63evaTJtvvrkddthhtuaaa7obHWnLmS6Krv+v92u974e9aYIuyq4bJujfCr3Hv/zyy+4mCtw0IdvnCqNPh0BdAzeF6bpuWseOHV3opss8aLWbtpNq9ap+GNPncl3DVTtMdN1FfSbXo/hup/qzwi2l66yzjmtb7/X6jK5LR+jSMi1atCBwS8fpwigQWEKAwI2TAoGEBfTlWDdA0LWYdEFkXbNJ14XQB+0uXbq4L9x6aDWcLpSs67po+2lwe3HdRVRvxlqqrmXrusiyHtqSpg/bCvD0xv7Pf/7T9EatVTW665E+8Hfq1Mkd+/vvv7tjRowY4e6Epv51kwT1r36LL9CaMBndI5AbgR9//NEF3o888oh99dVX1qRJEzvwwAPdqtNmzZpVe9OE4FpN+tVcdyBr3779ogum85rOzenBRHIqoB/FFKrrDuL60r3SSiu5mxTp2os77LDDopVv+jKt1e0K4fUFWytn9ttvP/f3hV/C27VrZ59++qn78U7Bne5QqPBe29i4MHpOTyKmVTaBugZues1NnTrV7VLRNdz0mVqXb3njjTdMr1XdHVQ/bOtzusJyhXD6wSxM4KbnB23rta6bLO2xxx72zDPPELiV7YygIwTqJkDgVjcvjkYglQLFH7yLBxn2bqipnByDQgABBBBAAAEEEEAAAQQQQCBjAgRuGSsYw0WglACBG+cFAggggAACCCCAAAIIIIAAAukRIHBLTy0YCQL1FiBwqzcdT0QAAQQQQAABBBBAAAEEEEAgcgECt8hJaRABBBBAAAEEEEAAAQQQQAABBBBAwGcBAjefq8/cEUAAAQQQQAABBBBAAAEEEEAAAQQiFyBwi5yUBhFAAAEEEEAAAQQQQAABBBBAAAEEfBYgcPO5+swdAQQQQAABBBBAAAEEEEAAAQQQQCByAQK3yElpEAEEEEAAAQQQQAABBBBAAAEEEEDAZwECN5+rz9wRQAABBBBAAAEEEEAAAQQQQAABBCIXIHCLnJQGEUAAAQQQQAABBBBAAAEEEEAAAQR8FiBw87n6zB0BBBBAAAEEEEAAAQQQQAABBBBAIHIBArfISWkQAQQQQAABBBBAAAEEEEAAAQQQQMBnAQI3n6vP3BFAAAEEEEAAAQQQQAABBBBAAAEEIhcgcIuclAYRQAABBBBAAAEEEEAAAQQQQAABBHwWIHDzufrMHQEEEEAAAQQQQAABBBBAAAEEEEAgcgECt8hJaRABBBBAAAEEEEAAAQQQQAABBBBAwGcBAjefq8/cEUAAAQQQQAABBBBAAAEEEEAAAQQiFyBwi5yUBhFAAAEEEEAAAQQQQAABBBBAAAEEfBb4P7zeB2s77VKXAAAAAElFTkSuQmCC"></img>';
$mipdf = new DOMPDF();
$mipdf ->set_paper('A4', "Landscape"); 
$mipdf ->load_html($html,'UTF-8');
$mipdf ->render();
$mipdf ->stream('Acta.pdf', array("Attachment" => 0));

?>
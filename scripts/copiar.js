function copiarCodigoPix() {
    const codigoPix = "00020101021226580014BR.GOV.BCB.PIX0136b7322962-99d6-495d-8a0e-279e49c883a75204000053039865802BR5909dev. jhow6006araras62070503***6304BA6A"; // Código Pix
    navigator.clipboard.writeText(codigoPix).then(() => {
      alert("Código Pix copiado com sucesso!");
    }).catch(err => {
      console.error("Erro ao copiar o código Pix: ", err);
    });
  }
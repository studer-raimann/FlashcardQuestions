<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'DeepCopy\\DeepCopy' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/DeepCopy.php',
    'DeepCopy\\Exception\\CloneException' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Exception/CloneException.php',
    'DeepCopy\\Exception\\PropertyException' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Exception/PropertyException.php',
    'DeepCopy\\Filter\\Doctrine\\DoctrineCollectionFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/Doctrine/DoctrineCollectionFilter.php',
    'DeepCopy\\Filter\\Doctrine\\DoctrineEmptyCollectionFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/Doctrine/DoctrineEmptyCollectionFilter.php',
    'DeepCopy\\Filter\\Doctrine\\DoctrineProxyFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/Doctrine/DoctrineProxyFilter.php',
    'DeepCopy\\Filter\\Filter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/Filter.php',
    'DeepCopy\\Filter\\KeepFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/KeepFilter.php',
    'DeepCopy\\Filter\\ReplaceFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/ReplaceFilter.php',
    'DeepCopy\\Filter\\SetNullFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Filter/SetNullFilter.php',
    'DeepCopy\\Matcher\\Doctrine\\DoctrineProxyMatcher' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Matcher/Doctrine/DoctrineProxyMatcher.php',
    'DeepCopy\\Matcher\\Matcher' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Matcher/Matcher.php',
    'DeepCopy\\Matcher\\PropertyMatcher' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Matcher/PropertyMatcher.php',
    'DeepCopy\\Matcher\\PropertyNameMatcher' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Matcher/PropertyNameMatcher.php',
    'DeepCopy\\Matcher\\PropertyTypeMatcher' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Matcher/PropertyTypeMatcher.php',
    'DeepCopy\\Reflection\\ReflectionHelper' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/Reflection/ReflectionHelper.php',
    'DeepCopy\\TypeFilter\\Date\\DateIntervalFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/Date/DateIntervalFilter.php',
    'DeepCopy\\TypeFilter\\ReplaceFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/ReplaceFilter.php',
    'DeepCopy\\TypeFilter\\ShallowCopyFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/ShallowCopyFilter.php',
    'DeepCopy\\TypeFilter\\Spl\\SplDoublyLinkedList' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/Spl/SplDoublyLinkedList.php',
    'DeepCopy\\TypeFilter\\Spl\\SplDoublyLinkedListFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/Spl/SplDoublyLinkedListFilter.php',
    'DeepCopy\\TypeFilter\\TypeFilter' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/TypeFilter.php',
    'DeepCopy\\TypeMatcher\\TypeMatcher' => $vendorDir . '/myclabs/deep-copy/src/DeepCopy/TypeMatcher/TypeMatcher.php',
    'FPDF_TPL' => $vendorDir . '/setasign/fpdi/fpdf_tpl.php',
    'FPDI' => $vendorDir . '/setasign/fpdi/fpdi.php',
    'FilterASCII85' => $vendorDir . '/setasign/fpdi/filters/FilterASCII85.php',
    'FilterASCIIHexDecode' => $vendorDir . '/setasign/fpdi/filters/FilterASCIIHexDecode.php',
    'FilterLZW' => $vendorDir . '/setasign/fpdi/filters/FilterLZW.php',
    'FlashcardQuestionsRemoveDataConfirm' => $baseDir . '/classes/uninstall/class.FlashcardQuestionsRemoveDataConfirm.php',
    'Mpdf\\Barcode' => $vendorDir . '/mpdf/mpdf/src/Barcode.php',
    'Mpdf\\Barcode\\AbstractBarcode' => $vendorDir . '/mpdf/mpdf/src/Barcode/AbstractBarcode.php',
    'Mpdf\\Barcode\\BarcodeException' => $vendorDir . '/mpdf/mpdf/src/Barcode/BarcodeException.php',
    'Mpdf\\Barcode\\BarcodeInterface' => $vendorDir . '/mpdf/mpdf/src/Barcode/BarcodeInterface.php',
    'Mpdf\\Barcode\\Codabar' => $vendorDir . '/mpdf/mpdf/src/Barcode/Codabar.php',
    'Mpdf\\Barcode\\Code11' => $vendorDir . '/mpdf/mpdf/src/Barcode/Code11.php',
    'Mpdf\\Barcode\\Code128' => $vendorDir . '/mpdf/mpdf/src/Barcode/Code128.php',
    'Mpdf\\Barcode\\Code39' => $vendorDir . '/mpdf/mpdf/src/Barcode/Code39.php',
    'Mpdf\\Barcode\\Code93' => $vendorDir . '/mpdf/mpdf/src/Barcode/Code93.php',
    'Mpdf\\Barcode\\EanExt' => $vendorDir . '/mpdf/mpdf/src/Barcode/EanExt.php',
    'Mpdf\\Barcode\\EanUpc' => $vendorDir . '/mpdf/mpdf/src/Barcode/EanUpc.php',
    'Mpdf\\Barcode\\I25' => $vendorDir . '/mpdf/mpdf/src/Barcode/I25.php',
    'Mpdf\\Barcode\\Imb' => $vendorDir . '/mpdf/mpdf/src/Barcode/Imb.php',
    'Mpdf\\Barcode\\Msi' => $vendorDir . '/mpdf/mpdf/src/Barcode/Msi.php',
    'Mpdf\\Barcode\\Postnet' => $vendorDir . '/mpdf/mpdf/src/Barcode/Postnet.php',
    'Mpdf\\Barcode\\Rm4Scc' => $vendorDir . '/mpdf/mpdf/src/Barcode/Rm4Scc.php',
    'Mpdf\\Barcode\\S25' => $vendorDir . '/mpdf/mpdf/src/Barcode/S25.php',
    'Mpdf\\Cache' => $vendorDir . '/mpdf/mpdf/src/Cache.php',
    'Mpdf\\Color\\ColorConverter' => $vendorDir . '/mpdf/mpdf/src/Color/ColorConverter.php',
    'Mpdf\\Color\\ColorModeConverter' => $vendorDir . '/mpdf/mpdf/src/Color/ColorModeConverter.php',
    'Mpdf\\Color\\ColorSpaceRestrictor' => $vendorDir . '/mpdf/mpdf/src/Color/ColorSpaceRestrictor.php',
    'Mpdf\\Color\\NamedColors' => $vendorDir . '/mpdf/mpdf/src/Color/NamedColors.php',
    'Mpdf\\Config\\ConfigVariables' => $vendorDir . '/mpdf/mpdf/src/Config/ConfigVariables.php',
    'Mpdf\\Config\\FontVariables' => $vendorDir . '/mpdf/mpdf/src/Config/FontVariables.php',
    'Mpdf\\Conversion\\DecToAlpha' => $vendorDir . '/mpdf/mpdf/src/Conversion/DecToAlpha.php',
    'Mpdf\\Conversion\\DecToCjk' => $vendorDir . '/mpdf/mpdf/src/Conversion/DecToCjk.php',
    'Mpdf\\Conversion\\DecToHebrew' => $vendorDir . '/mpdf/mpdf/src/Conversion/DecToHebrew.php',
    'Mpdf\\Conversion\\DecToOther' => $vendorDir . '/mpdf/mpdf/src/Conversion/DecToOther.php',
    'Mpdf\\Conversion\\DecToRoman' => $vendorDir . '/mpdf/mpdf/src/Conversion/DecToRoman.php',
    'Mpdf\\CssManager' => $vendorDir . '/mpdf/mpdf/src/CssManager.php',
    'Mpdf\\Css\\Border' => $vendorDir . '/mpdf/mpdf/src/Css/Border.php',
    'Mpdf\\Css\\DefaultCss' => $vendorDir . '/mpdf/mpdf/src/Css/DefaultCss.php',
    'Mpdf\\Css\\TextVars' => $vendorDir . '/mpdf/mpdf/src/Css/TextVars.php',
    'Mpdf\\DirectWrite' => $vendorDir . '/mpdf/mpdf/src/DirectWrite.php',
    'Mpdf\\Exception\\InvalidArgumentException' => $vendorDir . '/mpdf/mpdf/src/Exception/InvalidArgumentException.php',
    'Mpdf\\Fonts\\FontCache' => $vendorDir . '/mpdf/mpdf/src/Fonts/FontCache.php',
    'Mpdf\\Fonts\\FontFileFinder' => $vendorDir . '/mpdf/mpdf/src/Fonts/FontFileFinder.php',
    'Mpdf\\Fonts\\GlyphOperator' => $vendorDir . '/mpdf/mpdf/src/Fonts/GlyphOperator.php',
    'Mpdf\\Fonts\\MetricsGenerator' => $vendorDir . '/mpdf/mpdf/src/Fonts/MetricsGenerator.php',
    'Mpdf\\Form' => $vendorDir . '/mpdf/mpdf/src/Form.php',
    'Mpdf\\Gif\\ColorTable' => $vendorDir . '/mpdf/mpdf/src/Gif/ColorTable.php',
    'Mpdf\\Gif\\FileHeader' => $vendorDir . '/mpdf/mpdf/src/Gif/FileHeader.php',
    'Mpdf\\Gif\\Gif' => $vendorDir . '/mpdf/mpdf/src/Gif/Gif.php',
    'Mpdf\\Gif\\Image' => $vendorDir . '/mpdf/mpdf/src/Gif/Image.php',
    'Mpdf\\Gif\\ImageHeader' => $vendorDir . '/mpdf/mpdf/src/Gif/ImageHeader.php',
    'Mpdf\\Gif\\Lzw' => $vendorDir . '/mpdf/mpdf/src/Gif/Lzw.php',
    'Mpdf\\Gradient' => $vendorDir . '/mpdf/mpdf/src/Gradient.php',
    'Mpdf\\HTMLParserMode' => $vendorDir . '/mpdf/mpdf/src/HTMLParserMode.php',
    'Mpdf\\Hyphenator' => $vendorDir . '/mpdf/mpdf/src/Hyphenator.php',
    'Mpdf\\Image\\Bmp' => $vendorDir . '/mpdf/mpdf/src/Image/Bmp.php',
    'Mpdf\\Image\\ImageProcessor' => $vendorDir . '/mpdf/mpdf/src/Image/ImageProcessor.php',
    'Mpdf\\Image\\ImageTypeGuesser' => $vendorDir . '/mpdf/mpdf/src/Image/ImageTypeGuesser.php',
    'Mpdf\\Image\\Svg' => $vendorDir . '/mpdf/mpdf/src/Image/Svg.php',
    'Mpdf\\Image\\Wmf' => $vendorDir . '/mpdf/mpdf/src/Image/Wmf.php',
    'Mpdf\\Language\\LanguageToFont' => $vendorDir . '/mpdf/mpdf/src/Language/LanguageToFont.php',
    'Mpdf\\Language\\LanguageToFontInterface' => $vendorDir . '/mpdf/mpdf/src/Language/LanguageToFontInterface.php',
    'Mpdf\\Language\\ScriptToLanguage' => $vendorDir . '/mpdf/mpdf/src/Language/ScriptToLanguage.php',
    'Mpdf\\Language\\ScriptToLanguageInterface' => $vendorDir . '/mpdf/mpdf/src/Language/ScriptToLanguageInterface.php',
    'Mpdf\\Log\\Context' => $vendorDir . '/mpdf/mpdf/src/Log/Context.php',
    'Mpdf\\Mpdf' => $vendorDir . '/mpdf/mpdf/src/Mpdf.php',
    'Mpdf\\MpdfException' => $vendorDir . '/mpdf/mpdf/src/MpdfException.php',
    'Mpdf\\MpdfImageException' => $vendorDir . '/mpdf/mpdf/src/MpdfImageException.php',
    'Mpdf\\Otl' => $vendorDir . '/mpdf/mpdf/src/Otl.php',
    'Mpdf\\OtlDump' => $vendorDir . '/mpdf/mpdf/src/OtlDump.php',
    'Mpdf\\Output\\Destination' => $vendorDir . '/mpdf/mpdf/src/Output/Destination.php',
    'Mpdf\\PageFormat' => $vendorDir . '/mpdf/mpdf/src/PageFormat.php',
    'Mpdf\\Pdf\\Protection' => $vendorDir . '/mpdf/mpdf/src/Pdf/Protection.php',
    'Mpdf\\Pdf\\Protection\\UniqidGenerator' => $vendorDir . '/mpdf/mpdf/src/Pdf/Protection/UniqidGenerator.php',
    'Mpdf\\QrCode\\QrCode' => $vendorDir . '/mpdf/mpdf/src/QrCode/QrCode.php',
    'Mpdf\\QrCode\\QrCodeException' => $vendorDir . '/mpdf/mpdf/src/QrCode/QrCodeException.php',
    'Mpdf\\RemoteContentFetcher' => $vendorDir . '/mpdf/mpdf/src/RemoteContentFetcher.php',
    'Mpdf\\ServiceFactory' => $vendorDir . '/mpdf/mpdf/src/ServiceFactory.php',
    'Mpdf\\Shaper\\Indic' => $vendorDir . '/mpdf/mpdf/src/Shaper/Indic.php',
    'Mpdf\\Shaper\\Myanmar' => $vendorDir . '/mpdf/mpdf/src/Shaper/Myanmar.php',
    'Mpdf\\Shaper\\Sea' => $vendorDir . '/mpdf/mpdf/src/Shaper/Sea.php',
    'Mpdf\\SizeConverter' => $vendorDir . '/mpdf/mpdf/src/SizeConverter.php',
    'Mpdf\\Strict' => $vendorDir . '/mpdf/mpdf/src/Strict.php',
    'Mpdf\\TTFontFile' => $vendorDir . '/mpdf/mpdf/src/TTFontFile.php',
    'Mpdf\\TTFontFileAnalysis' => $vendorDir . '/mpdf/mpdf/src/TTFontFileAnalysis.php',
    'Mpdf\\TableOfContents' => $vendorDir . '/mpdf/mpdf/src/TableOfContents.php',
    'Mpdf\\Tag' => $vendorDir . '/mpdf/mpdf/src/Tag.php',
    'Mpdf\\Tag\\A' => $vendorDir . '/mpdf/mpdf/src/Tag/A.php',
    'Mpdf\\Tag\\Acronym' => $vendorDir . '/mpdf/mpdf/src/Tag/Acronym.php',
    'Mpdf\\Tag\\Address' => $vendorDir . '/mpdf/mpdf/src/Tag/Address.php',
    'Mpdf\\Tag\\Annotation' => $vendorDir . '/mpdf/mpdf/src/Tag/Annotation.php',
    'Mpdf\\Tag\\Article' => $vendorDir . '/mpdf/mpdf/src/Tag/Article.php',
    'Mpdf\\Tag\\Aside' => $vendorDir . '/mpdf/mpdf/src/Tag/Aside.php',
    'Mpdf\\Tag\\B' => $vendorDir . '/mpdf/mpdf/src/Tag/B.php',
    'Mpdf\\Tag\\BarCode' => $vendorDir . '/mpdf/mpdf/src/Tag/BarCode.php',
    'Mpdf\\Tag\\Bdi' => $vendorDir . '/mpdf/mpdf/src/Tag/Bdi.php',
    'Mpdf\\Tag\\Bdo' => $vendorDir . '/mpdf/mpdf/src/Tag/Bdo.php',
    'Mpdf\\Tag\\Big' => $vendorDir . '/mpdf/mpdf/src/Tag/Big.php',
    'Mpdf\\Tag\\BlockQuote' => $vendorDir . '/mpdf/mpdf/src/Tag/BlockQuote.php',
    'Mpdf\\Tag\\BlockTag' => $vendorDir . '/mpdf/mpdf/src/Tag/BlockTag.php',
    'Mpdf\\Tag\\Bookmark' => $vendorDir . '/mpdf/mpdf/src/Tag/Bookmark.php',
    'Mpdf\\Tag\\Br' => $vendorDir . '/mpdf/mpdf/src/Tag/Br.php',
    'Mpdf\\Tag\\Caption' => $vendorDir . '/mpdf/mpdf/src/Tag/Caption.php',
    'Mpdf\\Tag\\Center' => $vendorDir . '/mpdf/mpdf/src/Tag/Center.php',
    'Mpdf\\Tag\\Cite' => $vendorDir . '/mpdf/mpdf/src/Tag/Cite.php',
    'Mpdf\\Tag\\Code' => $vendorDir . '/mpdf/mpdf/src/Tag/Code.php',
    'Mpdf\\Tag\\ColumnBreak' => $vendorDir . '/mpdf/mpdf/src/Tag/ColumnBreak.php',
    'Mpdf\\Tag\\Columns' => $vendorDir . '/mpdf/mpdf/src/Tag/Columns.php',
    'Mpdf\\Tag\\Dd' => $vendorDir . '/mpdf/mpdf/src/Tag/Dd.php',
    'Mpdf\\Tag\\Del' => $vendorDir . '/mpdf/mpdf/src/Tag/Del.php',
    'Mpdf\\Tag\\Details' => $vendorDir . '/mpdf/mpdf/src/Tag/Details.php',
    'Mpdf\\Tag\\Div' => $vendorDir . '/mpdf/mpdf/src/Tag/Div.php',
    'Mpdf\\Tag\\Dl' => $vendorDir . '/mpdf/mpdf/src/Tag/Dl.php',
    'Mpdf\\Tag\\DotTab' => $vendorDir . '/mpdf/mpdf/src/Tag/DotTab.php',
    'Mpdf\\Tag\\Dt' => $vendorDir . '/mpdf/mpdf/src/Tag/Dt.php',
    'Mpdf\\Tag\\Em' => $vendorDir . '/mpdf/mpdf/src/Tag/Em.php',
    'Mpdf\\Tag\\FieldSet' => $vendorDir . '/mpdf/mpdf/src/Tag/FieldSet.php',
    'Mpdf\\Tag\\FigCaption' => $vendorDir . '/mpdf/mpdf/src/Tag/FigCaption.php',
    'Mpdf\\Tag\\Figure' => $vendorDir . '/mpdf/mpdf/src/Tag/Figure.php',
    'Mpdf\\Tag\\Font' => $vendorDir . '/mpdf/mpdf/src/Tag/Font.php',
    'Mpdf\\Tag\\Footer' => $vendorDir . '/mpdf/mpdf/src/Tag/Footer.php',
    'Mpdf\\Tag\\Form' => $vendorDir . '/mpdf/mpdf/src/Tag/Form.php',
    'Mpdf\\Tag\\FormFeed' => $vendorDir . '/mpdf/mpdf/src/Tag/FormFeed.php',
    'Mpdf\\Tag\\H1' => $vendorDir . '/mpdf/mpdf/src/Tag/H1.php',
    'Mpdf\\Tag\\H2' => $vendorDir . '/mpdf/mpdf/src/Tag/H2.php',
    'Mpdf\\Tag\\H3' => $vendorDir . '/mpdf/mpdf/src/Tag/H3.php',
    'Mpdf\\Tag\\H4' => $vendorDir . '/mpdf/mpdf/src/Tag/H4.php',
    'Mpdf\\Tag\\H5' => $vendorDir . '/mpdf/mpdf/src/Tag/H5.php',
    'Mpdf\\Tag\\H6' => $vendorDir . '/mpdf/mpdf/src/Tag/H6.php',
    'Mpdf\\Tag\\HGroup' => $vendorDir . '/mpdf/mpdf/src/Tag/HGroup.php',
    'Mpdf\\Tag\\Header' => $vendorDir . '/mpdf/mpdf/src/Tag/Header.php',
    'Mpdf\\Tag\\Hr' => $vendorDir . '/mpdf/mpdf/src/Tag/Hr.php',
    'Mpdf\\Tag\\I' => $vendorDir . '/mpdf/mpdf/src/Tag/I.php',
    'Mpdf\\Tag\\Img' => $vendorDir . '/mpdf/mpdf/src/Tag/Img.php',
    'Mpdf\\Tag\\IndexEntry' => $vendorDir . '/mpdf/mpdf/src/Tag/IndexEntry.php',
    'Mpdf\\Tag\\IndexInsert' => $vendorDir . '/mpdf/mpdf/src/Tag/IndexInsert.php',
    'Mpdf\\Tag\\InlineTag' => $vendorDir . '/mpdf/mpdf/src/Tag/InlineTag.php',
    'Mpdf\\Tag\\Input' => $vendorDir . '/mpdf/mpdf/src/Tag/Input.php',
    'Mpdf\\Tag\\Ins' => $vendorDir . '/mpdf/mpdf/src/Tag/Ins.php',
    'Mpdf\\Tag\\Kbd' => $vendorDir . '/mpdf/mpdf/src/Tag/Kbd.php',
    'Mpdf\\Tag\\Legend' => $vendorDir . '/mpdf/mpdf/src/Tag/Legend.php',
    'Mpdf\\Tag\\Li' => $vendorDir . '/mpdf/mpdf/src/Tag/Li.php',
    'Mpdf\\Tag\\Main' => $vendorDir . '/mpdf/mpdf/src/Tag/Main.php',
    'Mpdf\\Tag\\Mark' => $vendorDir . '/mpdf/mpdf/src/Tag/Mark.php',
    'Mpdf\\Tag\\Meter' => $vendorDir . '/mpdf/mpdf/src/Tag/Meter.php',
    'Mpdf\\Tag\\Nav' => $vendorDir . '/mpdf/mpdf/src/Tag/Nav.php',
    'Mpdf\\Tag\\NewColumn' => $vendorDir . '/mpdf/mpdf/src/Tag/NewColumn.php',
    'Mpdf\\Tag\\NewPage' => $vendorDir . '/mpdf/mpdf/src/Tag/NewPage.php',
    'Mpdf\\Tag\\Ol' => $vendorDir . '/mpdf/mpdf/src/Tag/Ol.php',
    'Mpdf\\Tag\\Option' => $vendorDir . '/mpdf/mpdf/src/Tag/Option.php',
    'Mpdf\\Tag\\P' => $vendorDir . '/mpdf/mpdf/src/Tag/P.php',
    'Mpdf\\Tag\\PageBreak' => $vendorDir . '/mpdf/mpdf/src/Tag/PageBreak.php',
    'Mpdf\\Tag\\PageFooter' => $vendorDir . '/mpdf/mpdf/src/Tag/PageFooter.php',
    'Mpdf\\Tag\\PageHeader' => $vendorDir . '/mpdf/mpdf/src/Tag/PageHeader.php',
    'Mpdf\\Tag\\Pre' => $vendorDir . '/mpdf/mpdf/src/Tag/Pre.php',
    'Mpdf\\Tag\\Progress' => $vendorDir . '/mpdf/mpdf/src/Tag/Progress.php',
    'Mpdf\\Tag\\Q' => $vendorDir . '/mpdf/mpdf/src/Tag/Q.php',
    'Mpdf\\Tag\\S' => $vendorDir . '/mpdf/mpdf/src/Tag/S.php',
    'Mpdf\\Tag\\Samp' => $vendorDir . '/mpdf/mpdf/src/Tag/Samp.php',
    'Mpdf\\Tag\\Section' => $vendorDir . '/mpdf/mpdf/src/Tag/Section.php',
    'Mpdf\\Tag\\Select' => $vendorDir . '/mpdf/mpdf/src/Tag/Select.php',
    'Mpdf\\Tag\\SetHtmlPageFooter' => $vendorDir . '/mpdf/mpdf/src/Tag/SetHtmlPageFooter.php',
    'Mpdf\\Tag\\SetHtmlPageHeader' => $vendorDir . '/mpdf/mpdf/src/Tag/SetHtmlPageHeader.php',
    'Mpdf\\Tag\\SetPageFooter' => $vendorDir . '/mpdf/mpdf/src/Tag/SetPageFooter.php',
    'Mpdf\\Tag\\SetPageHeader' => $vendorDir . '/mpdf/mpdf/src/Tag/SetPageHeader.php',
    'Mpdf\\Tag\\Small' => $vendorDir . '/mpdf/mpdf/src/Tag/Small.php',
    'Mpdf\\Tag\\Span' => $vendorDir . '/mpdf/mpdf/src/Tag/Span.php',
    'Mpdf\\Tag\\Strike' => $vendorDir . '/mpdf/mpdf/src/Tag/Strike.php',
    'Mpdf\\Tag\\Strong' => $vendorDir . '/mpdf/mpdf/src/Tag/Strong.php',
    'Mpdf\\Tag\\Sub' => $vendorDir . '/mpdf/mpdf/src/Tag/Sub.php',
    'Mpdf\\Tag\\SubstituteTag' => $vendorDir . '/mpdf/mpdf/src/Tag/SubstituteTag.php',
    'Mpdf\\Tag\\Summary' => $vendorDir . '/mpdf/mpdf/src/Tag/Summary.php',
    'Mpdf\\Tag\\Sup' => $vendorDir . '/mpdf/mpdf/src/Tag/Sup.php',
    'Mpdf\\Tag\\TBody' => $vendorDir . '/mpdf/mpdf/src/Tag/TBody.php',
    'Mpdf\\Tag\\TFoot' => $vendorDir . '/mpdf/mpdf/src/Tag/TFoot.php',
    'Mpdf\\Tag\\THead' => $vendorDir . '/mpdf/mpdf/src/Tag/THead.php',
    'Mpdf\\Tag\\Table' => $vendorDir . '/mpdf/mpdf/src/Tag/Table.php',
    'Mpdf\\Tag\\Tag' => $vendorDir . '/mpdf/mpdf/src/Tag/Tag.php',
    'Mpdf\\Tag\\Td' => $vendorDir . '/mpdf/mpdf/src/Tag/Td.php',
    'Mpdf\\Tag\\TextArea' => $vendorDir . '/mpdf/mpdf/src/Tag/TextArea.php',
    'Mpdf\\Tag\\TextCircle' => $vendorDir . '/mpdf/mpdf/src/Tag/TextCircle.php',
    'Mpdf\\Tag\\Th' => $vendorDir . '/mpdf/mpdf/src/Tag/Th.php',
    'Mpdf\\Tag\\Time' => $vendorDir . '/mpdf/mpdf/src/Tag/Time.php',
    'Mpdf\\Tag\\Toc' => $vendorDir . '/mpdf/mpdf/src/Tag/Toc.php',
    'Mpdf\\Tag\\TocEntry' => $vendorDir . '/mpdf/mpdf/src/Tag/TocEntry.php',
    'Mpdf\\Tag\\TocPageBreak' => $vendorDir . '/mpdf/mpdf/src/Tag/TocPageBreak.php',
    'Mpdf\\Tag\\Tr' => $vendorDir . '/mpdf/mpdf/src/Tag/Tr.php',
    'Mpdf\\Tag\\Tt' => $vendorDir . '/mpdf/mpdf/src/Tag/Tt.php',
    'Mpdf\\Tag\\Tta' => $vendorDir . '/mpdf/mpdf/src/Tag/Tta.php',
    'Mpdf\\Tag\\Tts' => $vendorDir . '/mpdf/mpdf/src/Tag/Tts.php',
    'Mpdf\\Tag\\Ttz' => $vendorDir . '/mpdf/mpdf/src/Tag/Ttz.php',
    'Mpdf\\Tag\\U' => $vendorDir . '/mpdf/mpdf/src/Tag/U.php',
    'Mpdf\\Tag\\Ul' => $vendorDir . '/mpdf/mpdf/src/Tag/Ul.php',
    'Mpdf\\Tag\\VarTag' => $vendorDir . '/mpdf/mpdf/src/Tag/VarTag.php',
    'Mpdf\\Tag\\WatermarkImage' => $vendorDir . '/mpdf/mpdf/src/Tag/WatermarkImage.php',
    'Mpdf\\Tag\\WatermarkText' => $vendorDir . '/mpdf/mpdf/src/Tag/WatermarkText.php',
    'Mpdf\\Ucdn' => $vendorDir . '/mpdf/mpdf/src/Ucdn.php',
    'Mpdf\\Utils\\Arrays' => $vendorDir . '/mpdf/mpdf/src/Utils/Arrays.php',
    'Mpdf\\Utils\\NumericString' => $vendorDir . '/mpdf/mpdf/src/Utils/NumericString.php',
    'Mpdf\\Utils\\PdfDate' => $vendorDir . '/mpdf/mpdf/src/Utils/PdfDate.php',
    'Mpdf\\Utils\\UtfString' => $vendorDir . '/mpdf/mpdf/src/Utils/UtfString.php',
    'Mpdf\\Writer\\BackgroundWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/BackgroundWriter.php',
    'Mpdf\\Writer\\BaseWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/BaseWriter.php',
    'Mpdf\\Writer\\BookmarkWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/BookmarkWriter.php',
    'Mpdf\\Writer\\ColorWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/ColorWriter.php',
    'Mpdf\\Writer\\FontWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/FontWriter.php',
    'Mpdf\\Writer\\FormWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/FormWriter.php',
    'Mpdf\\Writer\\ImageWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/ImageWriter.php',
    'Mpdf\\Writer\\JavaScriptWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/JavaScriptWriter.php',
    'Mpdf\\Writer\\MetadataWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/MetadataWriter.php',
    'Mpdf\\Writer\\ObjectWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/ObjectWriter.php',
    'Mpdf\\Writer\\OptionalContentWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/OptionalContentWriter.php',
    'Mpdf\\Writer\\PageWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/PageWriter.php',
    'Mpdf\\Writer\\ResourceWriter' => $vendorDir . '/mpdf/mpdf/src/Writer/ResourceWriter.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'fpdi_pdf_parser' => $vendorDir . '/setasign/fpdi/fpdi_pdf_parser.php',
    'ilFlashcardQuestionsConfigGUI' => $baseDir . '/classes/class.ilFlashcardQuestionsConfigGUI.php',
    'ilFlashcardQuestionsPlugin' => $baseDir . '/classes/class.ilFlashcardQuestionsPlugin.php',
    'ilFlashcardQuestionsSelectorInputGUI' => $baseDir . '/classes/Input/class.ilFlashcardQuestionsSelectorInputGUI.php',
    'ilGlossaryDefinition' => $baseDir . '/../../../../../../../Modules/Glossary/classes/class.ilGlossaryDefinition.php',
    'ilLocatorGUI' => $baseDir . '/../../../../../../../Services/Locator/classes/class.ilLocatorGUI.php',
    'ilObjFlashcardQuestions' => $baseDir . '/classes/class.ilObjFlashcardQuestions.php',
    'ilObjFlashcardQuestionsAccess' => $baseDir . '/classes/class.ilObjFlashcardQuestionsAccess.php',
    'ilObjFlashcardQuestionsGUI' => $baseDir . '/classes/class.ilObjFlashcardQuestionsGUI.php',
    'ilObjFlashcardQuestionsListGUI' => $baseDir . '/classes/class.ilObjFlashcardQuestionsListGUI.php',
    'ilObjStyleSheet' => $baseDir . '/../../../../../../../Services/Style/Content/classes/class.ilObjStyleSheet.php',
    'ilObjTaxonomy' => $baseDir . '/../../../../../../../Services/Taxonomy/classes/class.ilObjTaxonomy.php',
    'ilTaxonomyNode' => $baseDir . '/../../../../../../../Services/Taxonomy/classes/class.ilTaxonomyNode.php',
    'ilTaxonomyTree' => $baseDir . '/../../../../../../../Services/Taxonomy/classes/class.ilTaxonomyTree.php',
    'pdf_context' => $vendorDir . '/setasign/fpdi/pdf_context.php',
    'srag\\ActiveRecordConfig\\FlashcardQuestions\\ActiveRecordConfig' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
    'srag\\ActiveRecordConfig\\FlashcardQuestions\\ActiveRecordConfigFormGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
    'srag\\ActiveRecordConfig\\FlashcardQuestions\\ActiveRecordConfigGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
    'srag\\ActiveRecordConfig\\FlashcardQuestions\\ActiveRecordConfigTableGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
    'srag\\ActiveRecordConfig\\FlashcardQuestions\\Exception\\ActiveRecordConfigException' => $vendorDir . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\CheckboxInputGUI\\CheckboxInputGUI' => $vendorDir . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\DateDurationInputGUI\\DateDurationInputGUI' => $vendorDir . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\GlyphGUI\\GlyphGUI' => $vendorDir . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\HiddenInputGUI\\HiddenInputGUI' => $vendorDir . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\MultiLineInputGUI\\MultiLineInputGUI' => $vendorDir . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\NumberInputGUI\\NumberInputGUI' => $vendorDir . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\PropertyFormGUI\\Items\\Items' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\PropertyFormGUI\\PropertyFormGUI' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => $vendorDir . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => $vendorDir . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\TableGUI\\Exception\\TableGUIException' => $vendorDir . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\TableGUI\\TableGUI' => $vendorDir . '/srag/custominputguis/src/TableGUI/TableGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\Template\\Template' => $vendorDir . '/srag/custominputguis/src/Template/Template.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\TextAreaInputGUI\\TextAreaInputGUI' => $vendorDir . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\TextInputGUI\\TextInputGUI' => $vendorDir . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
    'srag\\CustomInputGUIs\\FlashcardQuestions\\Waiter\\Waiter' => $vendorDir . '/srag/custominputguis/src/Waiter/Waiter.php',
    'srag\\DIC\\FlashcardQuestions\\DICStatic' => $vendorDir . '/srag/dic/src/DICStatic.php',
    'srag\\DIC\\FlashcardQuestions\\DICStaticInterface' => $vendorDir . '/srag/dic/src/DICStaticInterface.php',
    'srag\\DIC\\FlashcardQuestions\\DICTrait' => $vendorDir . '/srag/dic/src/DICTrait.php',
    'srag\\DIC\\FlashcardQuestions\\DIC\\AbstractDIC' => $vendorDir . '/srag/dic/src/DIC/AbstractDIC.php',
    'srag\\DIC\\FlashcardQuestions\\DIC\\DICInterface' => $vendorDir . '/srag/dic/src/DIC/DICInterface.php',
    'srag\\DIC\\FlashcardQuestions\\DIC\\Implementation\\ILIAS52DIC' => $vendorDir . '/srag/dic/src/DIC/Implementation/ILIAS52DIC.php',
    'srag\\DIC\\FlashcardQuestions\\DIC\\Implementation\\ILIAS53DIC' => $vendorDir . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
    'srag\\DIC\\FlashcardQuestions\\DIC\\Implementation\\ILIAS54DIC' => $vendorDir . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
    'srag\\DIC\\FlashcardQuestions\\DIC\\Implementation\\LegacyDIC' => $vendorDir . '/srag/dic/src/DIC/Implementation/LegacyDIC.php',
    'srag\\DIC\\FlashcardQuestions\\Exception\\DICException' => $vendorDir . '/srag/dic/src/Exception/DICException.php',
    'srag\\DIC\\FlashcardQuestions\\Output\\Output' => $vendorDir . '/srag/dic/src/Output/Output.php',
    'srag\\DIC\\FlashcardQuestions\\Output\\OutputInterface' => $vendorDir . '/srag/dic/src/Output/OutputInterface.php',
    'srag\\DIC\\FlashcardQuestions\\PHPVersionChecker' => $vendorDir . '/srag/dic/src/PHPVersionChecker.php',
    'srag\\DIC\\FlashcardQuestions\\Plugin\\Plugin' => $vendorDir . '/srag/dic/src/Plugin/Plugin.php',
    'srag\\DIC\\FlashcardQuestions\\Plugin\\PluginInterface' => $vendorDir . '/srag/dic/src/Plugin/PluginInterface.php',
    'srag\\DIC\\FlashcardQuestions\\Plugin\\Pluginable' => $vendorDir . '/srag/dic/src/Plugin/Pluginable.php',
    'srag\\DIC\\FlashcardQuestions\\Version\\Version' => $vendorDir . '/srag/dic/src/Version/Version.php',
    'srag\\DIC\\FlashcardQuestions\\Version\\VersionInterface' => $vendorDir . '/srag/dic/src/Version/VersionInterface.php',
    'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => $vendorDir . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
    'srag\\Plugins\\FlashcardQuestions\\Config\\Config' => $baseDir . '/src/Config/Config.php',
    'srag\\Plugins\\FlashcardQuestions\\Config\\ConfigFormGUI' => $baseDir . '/src/Config/ConfigFormGUI.php',
    'srag\\Plugins\\FlashcardQuestions\\GlossaryMigration\\GlossaryMigration' => $baseDir . '/src/Migration/GlossaryMigration.php',
    'srag\\Plugins\\FlashcardQuestions\\GlossaryMigration\\GlossaryMigrationWKV' => $baseDir . '/src/Migration/GlossaryMigrationWKV.php',
    'srag\\Plugins\\FlashcardQuestions\\GlossaryMigration\\MigrationFormGUI' => $baseDir . '/src/Migration/MigrationFormGUI.php',
    'srag\\Plugins\\FlashcardQuestions\\Object\\Obj' => $baseDir . '/src/Object/Obj.php',
    'srag\\Plugins\\FlashcardQuestions\\Object\\ObjSettingsFormGUI' => $baseDir . '/src/Object/ObjSettingsFormGUI.php',
    'srag\\Plugins\\FlashcardQuestions\\Question\\xfcqQuestion' => $baseDir . '/src/Question/xfcqQuestion.php',
    'srag\\Plugins\\FlashcardQuestions\\Question\\xfcqQuestionFormGUI' => $baseDir . '/src/Question/xfcqQuestionFormGUI.php',
    'srag\\Plugins\\FlashcardQuestions\\Question\\xfcqQuestionTableGUI' => $baseDir . '/src/Question/xfcqQuestionTableGUI.php',
    'srag\\Plugins\\FlashcardQuestions\\Question\\xfcqQuestionTaxNode' => $baseDir . '/src/Question/xfcqQuestionTaxNode.php',
    'srag\\Plugins\\FlashcardQuestions\\Report\\xfcqMPDF' => $baseDir . '/src/Report/xfcqMPDF.php',
    'srag\\Plugins\\FlashcardQuestions\\Report\\xfcqPDF' => $baseDir . '/src/Report/xfcqPDF.php',
    'srag\\RemovePluginDataConfirm\\FlashcardQuestions\\AbstractPluginUninstallTrait' => $vendorDir . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
    'srag\\RemovePluginDataConfirm\\FlashcardQuestions\\AbstractRemovePluginDataConfirm' => $vendorDir . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
    'srag\\RemovePluginDataConfirm\\FlashcardQuestions\\Exception\\RemovePluginDataConfirmException' => $vendorDir . '/srag/removeplugindataconfirm/src/Exception/RemovePluginDataConfirmException.php',
    'srag\\RemovePluginDataConfirm\\FlashcardQuestions\\PluginUninstallTrait' => $vendorDir . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
    'srag\\RemovePluginDataConfirm\\FlashcardQuestions\\RepositoryObjectPluginUninstallTrait' => $vendorDir . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    'xfcqContentGUI' => $baseDir . '/classes/Question/class.xfcqContentGUI.php',
    'xfcqPageObject' => $baseDir . '/classes/PageObject/class.xfcqPageObject.php',
    'xfcqPageObjectConfig' => $baseDir . '/classes/PageObject/class.xfcqPageObjectConfig.php',
    'xfcqPageObjectGUI' => $baseDir . '/classes/PageObject/class.xfcqPageObjectGUI.php',
    'xfcqQuestionGUI' => $baseDir . '/classes/Question/class.xfcqQuestionGUI.php',
);

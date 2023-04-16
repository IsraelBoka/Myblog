<!DOCTYPE html>
<html>
<head>
    <title>MBTI Test Result</title>
</head>
<body>
    <h2>Your MBTI Type is: {{ $type }}</h2>
    <p>{{ $typeDescription }}</p>

    <p>Extraversion (E) vs. Introversion (I): {{ $eScore }} vs. {{ $iScore }}</p>
    <p>Sensing (S) vs. Intuition (N): {{ $sScore }} vs. {{ $nScore }}</p>
    <p>Thinking (T) vs. Feeling (F): {{ $tScore }} vs. {{ $fScore }}</p>
    <p>Judging (J) vs. Perceiving (P): {{ $jScore }} vs. {{ $pScore }}</p>

    <p><a href="{{ route('mbti.index') }}">Take the test again</a></p>
    

</body>
</html>
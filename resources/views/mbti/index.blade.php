<form method="POST" action="{{ route('mbti.result') }}">
    @csrf
    <h2>MBTI Test</h2>

    <!-- Section 1: Extraversion (E) vs. Introversion (I) -->
    <h3>Section 1: Extraversion (E) vs. Introversion (I)</h3>
    <p>For each statement, select the option that best describes you:</p>
    <div class="mbti-question">
        <label>
            <input type="checkbox" name="q1[]" value="E">
            I prefer to socialize in larger groups or parties.
        </label>
        <label>
            <input type="checkbox" name="q1[]" value="I">
            I prefer to socialize in smaller, more intimate settings.
        </label>
    </div>
    <div class="mbti-question">
        <label>
            <input type="checkbox" name="q1[]" value="E">
            I tend to speak my mind even if it means offending someone.
        </label>
        <label>
            <input type="checkbox" name="q1[]" value="I">
            I tend to keep my opinions to myself to avoid conflict.
        </label>
    </div>
    <!-- Add more questions for Section 1 here -->

    <!-- Section 2: Sensing (S) vs. Intuition (N) -->
    <h3>Section 2: Sensing (S) vs. Intuition (N)</h3>
    <p>For each statement, select the option that best describes you:</p>
    <div class="mbti-question">
        <label>
            <input type="checkbox" name="q2[]" value="S">
            I prefer to focus on the present and what is real.
        </label>
        <label>
            <input type="checkbox" name="q2[]" value="N">
            I prefer to focus on future possibilities and what could be.
        </label>
    </div>
    <div class="mbti-question">
        <label>
            <input type="checkbox" name="q2[]" value="S">
            I rely on my senses and tangible evidence to form opinions.
        </label>
        <label>
            <input type="checkbox" name="q2[]" value="N">
            I trust my intuition and gut feelings to form opinions.
        </label>
    </div>
    <!-- Add more questions for Section 2 here -->

    <!-- Section 3: Thinking (T) vs. Feeling (F) -->
    <h3>Section 3: Thinking (T) vs. Feeling (F)</h3>
    <p>For each statement, select the option that best describes you:</p>
    <div class="mbti-question">
        <label>
            <input type="checkbox" name="q3[]" value="T">
            I tend to make decisions based on logic and objective analysis.
        </label>
        <label>
            <input type="checkbox" name="q3[]" value="F">
            I tend to make decisions based on values and subjective feelings.
        </label>
    </div>
    <div class="mbti-question">
        <label>
            <input type="checkbox" name="q3[]" value="T">
            I prefer to solve problems using a systematic and analytical approach.
        </label>
        <label>
            <input type="checkbox" name="q3[]" value="F">
            I prefer to solve problems using creative and empathetic methods.  
        </label>
        </div>
        <!-- Add more questions for Section 3 here -->
        
        <!-- Section 4: Judging (J) vs. Perceiving (P) -->
        <h3>Section 4: Judging (J) vs. Perceiving (P)</h3>
        <p>For each statement, select the option that best describes you:</p>
        <div class="mbti-question">
            <label>
                <input type="checkbox" name="q4[]" value="J">
                I like to plan my activities and stick to a schedule.
            </label>
            <label>
                <input type="checkbox" name="q4[]" value="P">
                I like to keep my options open and go with the flow.
            </label>
        </div>
        <div class="mbti-question">
            <label>
                <input type="checkbox" name="q4[]" value="J">
                I tend to be organized and methodical in my work.
            </label>
            <label>
                <input type="checkbox" name="q4[]" value="P">
                I tend to be flexible and adaptable in my work.
            </label>
        </div>
        <!-- Add more questions for Section 4 here -->
        
        <button type="submit">Submit</button>
    </form>

    {{-- <form method="POST" action="{{}}">
    @csrf
		<p>1. I enjoy meeting new people and socializing.</p>
		<input type="radio" name="q1[]" value="E"> Agree
		<input type="radio" name="q1[]" value="I"> Disagree
		<br><br>

		<p>2. I prefer to work alone rather than in a team.</p>
		<input type="radio" name="q2[]" value="I"> Agree
		<input type="radio" name="q2[]" value="E"> Disagree
		<br><br>

		<p>3. I pay attention to details and like to follow a plan.</p>
		<input type="radio" name="q3[]" value="S"> Agree
		<input type="radio" name="q3[]" value="N"> Disagree
		<br><br>

		<p>4. I enjoy trying new things and taking risks.</p>
		<input type="radio" name="q4[]" value="N"> Agree
		<input type="radio" name="q4[]" value="S"> Disagree
		<br><br>

		<p>5. I base my decisions on logic and reason.</p>
		<input type="radio" name="q5[]" value="T"> Agree
		<input type="radio" name="q5[]" value="F"> Disagree
		<br><br>

		<p>6. I am a very emotional person.</p>
		<input type="radio" name="q6[]" value="F"> Agree
		<input type="radio" name="q6[]" value="T"> Disagree
		<br><br>

		<p>7. I am a very organized and structured person.</p>
		<input type="radio" name="q7[]" value="J"> Agree
		<input type="radio" name="q7[]" value="P"> Disagree
		<br><br>

		<p>8. I am spontaneous and adaptable.</p>
		<input type="radio" name="q8[]" value="P"> Agree
		<input type="radio" name="q8[]" value="J"> Disagree
		<br><br>

		<input type="submit" value="Submit">
	</form>
--}}
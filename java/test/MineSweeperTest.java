import static org.junit.Assert.*;

import org.junit.Test;

public class MineSweeperTest {

	@Test
	public void test() {
		String aValidInput = "4 4\n*...\n....\n.*..\n....\n3 5\n**...\n.....\n.*...\n0 0\n";
		String theExpectedOutput = "Field #1:\n*100\n2210\n1*10\n1110\n\nField #2:\n**100\n33200\n1*100\n";

		MineSweeper mineSweeper = new MineSweeper();

		assertEquals(theExpectedOutput, mineSweeper.process(aValidInput));
	}

}

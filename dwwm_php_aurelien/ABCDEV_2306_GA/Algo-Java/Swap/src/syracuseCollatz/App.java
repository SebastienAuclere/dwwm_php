package syracuseCollatz;

import java.util.Scanner;
	
	class App {
			
	public static void main(String[] args)
		{
			Scanner sc = new Scanner(System.in);
			int uo = -1;
			while (!(uo > 0))
			{
				System.out.print("Terme initial? ");
				uo = sc.nextInt();
			}

			int un = uo;
			int nt = -1;
			int tmax = uo;
			while (un != 1)
			{
				System.out.print(un + " ");
				++nt;
				if (tmax < un)
				{
					tmax = un;
				}
						
				un = (un % 2 == 0 ? un / 2 : 3 * un + 1);
			}
			System.out.println(un);
			++nt;
			System.out.println("==> " + nt + " termes");
			System.out.println("==> Plus grand " + tmax);
		}
}

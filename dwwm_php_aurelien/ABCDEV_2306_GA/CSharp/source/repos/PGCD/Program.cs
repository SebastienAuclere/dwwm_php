namespace PGCD
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int temp = 0;
            string saisie;
            List<int> lista = new List<int>();
            List<int> listb = new List<int>();
            List<int> listc = new List<int>();


            Console.WriteLine("Saisir le 1er nombre");
            saisie = Console.ReadLine();
            a = int.Parse(saisie);


            for (int i = 1; i <= a; i++)
            {
                if (a % i == 0)
                {
                    lista.Add(i);

                }
            }

            Console.WriteLine("\nSaisir le 2eme nombre");
            saisie = Console.ReadLine();
            b = int.Parse(saisie);

            for (int j = 1; j <= b; j++)
            {
                if (b % j == 0)
                {
                    listb.Add(j);

                }
            }

            foreach (int i in lista)
            {
                foreach (int j in listb)
                {
                    if (i == j)
                    {
                       listc.Add(j);
                    }
                }
            }

            foreach (int k in listc)
            {
                temp = listc.Max();
            }

            Console.WriteLine("Le PGCD de " + a + " et " + b + " vaut: " + temp);
        }
    }
}